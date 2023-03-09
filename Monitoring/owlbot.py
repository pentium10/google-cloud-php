# Copyright 2018 Google LLC
#
# Licensed under the Apache License, Version 2.0 (the "License");
# you may not use this file except in compliance with the License.
# You may obtain a copy of the License at
#
#     http://www.apache.org/licenses/LICENSE-2.0
#
# Unless required by applicable law or agreed to in writing, software
# distributed under the License is distributed on an "AS IS" BASIS,
# WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
# See the License for the specific language governing permissions and
# limitations under the License.

"""This script is used to synthesize generated parts of this library."""

import logging
from pathlib import Path
import subprocess

import synthtool as s
from synthtool.languages import php
from synthtool import _tracked_paths

logging.basicConfig(level=logging.DEBUG)

src = Path(f"../{php.STAGING_DIR}/Monitoring").resolve()
dest = Path().resolve()

# Added so that we can pass copy_excludes in the owlbot_main() call
_tracked_paths.add(src)

php.owlbot_main(
    src=src,
    dest=dest,
    copy_excludes=[
        src / "*/src/V3/AlertPolicyServiceClient.php",
        src / "*/src/V3/GroupServiceClient.php",
        src / "*/src/V3/NotificationChannelServiceClient.php",
        src / "*/src/V3/ServiceMonitoringServiceClient.php",
        src / "*/src/V3/UptimeCheckServiceClient.php",
    ]
)


# V3 is GA, so remove @experimental tags
s.replace(
    'src/V3/**/*Client.php',
    r'^(\s+\*\n)?\s+\*\s@experimental\n',
    '')

for client in ['AlertPolicyService', 'NotificationChannelService']:
    s.replace(
        f'**/Gapic/{client}GapicClient.php',
        r'Copyright \d{4}',
        'Copyright 2018')
    s.replace(
        f'**/V3/{client}Client.php',
        r'Copyright \d{4}',
        'Copyright 2018')

s.replace(
    'tests/**/V3/*Test.php',
    r'Copyright \d{4}',
    'Copyright 2018')

# Fix class references in gapic samples
for version in ['V3']:
    pathExpr = 'src/' + version + '/Gapic/*GapicClient.php'

    types = {
        '= new Alert': r'= new Google\\Cloud\\Monitoring\\'+ version + r'\\Alert',
        '= new Group': r'= new Google\\Cloud\\Monitoring\\'+ version + r'\\Group',
        '= new Metric': r'= new Google\\Cloud\\Monitoring\\'+ version + r'\\Metric',
        '= new TimeInterval': r'= new Google\\Cloud\\Monitoring\\'+ version + r'\\TimeInterval',
        '= TimeSeriesView::': r'= Google\\Cloud\\Monitoring\\'+ version + r'\\ListTimeSeriesRequest\\TimeSeriesView::',
        '= new Notification': r'= new Google\\Cloud\\Monitoring\\'+ version + r'\\Notification',
        '= new UptimeCheck': r'= new Google\\Cloud\\Monitoring\\'+ version + r'\\UptimeCheck',

    }

    for search, replace in types.items():
        s.replace(
            pathExpr,
            search,
            replace
)

### [START] protoc backwards compatibility fixes

# roll back to private properties.
s.replace(
    "src/**/V*/**/*.php",
    r"Generated from protobuf field ([^\n]{0,})\n\s{5}\*/\n\s{4}protected \$",
    r"""Generated from protobuf field \1
     */
    private $""")

# Replace "Unwrapped" with "Value" for method names.
s.replace(
    "src/**/V*/**/*.php",
    r"public function ([s|g]\w{3,})Unwrapped",
    r"public function \1Value"
)

### [END] protoc backwards compatibility fixes

# fix relative cloud.google.com links
s.replace(
    "src/**/V*/**/*.php",
    r"(.{0,})\]\((/.{0,})\)",
    r"\1](https://cloud.google.com\2)"
)
