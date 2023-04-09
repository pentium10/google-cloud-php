<?php
/**
 * Copyright 2018, Google LLC All rights reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Google\Cloud\Bigtable\Tests\Unit;

use Google\Cloud\Bigtable\ReadModifyWriteRowRules;
use Google\Cloud\Bigtable\V2\ReadModifyWriteRule;
use PHPUnit\Framework\TestCase;

/**
 * @group bigtable
 * @group bigtabledata
 */
class ReadModifyWriteRowRulesTest extends TestCase
{
    const COLUMN_FAMILY = 'cf1';
    const COLUMN_QUALIFIER = 'cq1';

    private $readModifyWriteRowRules;

    public function setUp(): void
    {
        $this->readModifyWriteRowRules = new ReadModifyWriteRowRules;
    }

    public function testAppend()
    {
        $return = $this->readModifyWriteRowRules->append(
            self::COLUMN_FAMILY,
            self::COLUMN_QUALIFIER,
            'value1'
        );
        $proto = $this->readModifyWriteRowRules->toProto();
        $expectedProto[] = (new ReadModifyWriteRule)
            ->setFamilyName(self::COLUMN_FAMILY)
            ->setColumnQualifier(self::COLUMN_QUALIFIER)
            ->setAppendValue('value1');
        $this->assertEquals($this->readModifyWriteRowRules, $return);
        $this->assertEquals($expectedProto, $proto);
    }

    public function testIncrement()
    {
        $return = $this->readModifyWriteRowRules->increment(
            self::COLUMN_FAMILY,
            self::COLUMN_QUALIFIER,
            5
        );
        $proto = $this->readModifyWriteRowRules->toProto();
        $expectedProto[] = (new ReadModifyWriteRule)
            ->setFamilyName(self::COLUMN_FAMILY)
            ->setColumnQualifier(self::COLUMN_QUALIFIER)
            ->setIncrementAmount(5);
        $this->assertEquals($this->readModifyWriteRowRules, $return);
        $this->assertEquals($expectedProto, $proto);
    }
}
