<?php
/*
 * Copyright 2022 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * This file was automatically generated - do not edit!
 */

require_once __DIR__ . '/../../../vendor/autoload.php';

// [START automl_v1_generated_AutoMl_ExportData_sync]
use Google\ApiCore\ApiException;
use Google\ApiCore\OperationResponse;
use Google\Cloud\AutoMl\V1\AutoMlClient;
use Google\Cloud\AutoMl\V1\GcsDestination;
use Google\Cloud\AutoMl\V1\OutputConfig;
use Google\Rpc\Status;

/**
 * Exports dataset's data to the provided output location.
 * Returns an empty response in the
 * [response][google.longrunning.Operation.response] field when it completes.
 *
 * @param string $formattedName                             The resource name of the dataset. Please see
 *                                                          {@see AutoMlClient::datasetName()} for help formatting this field.
 * @param string $outputConfigGcsDestinationOutputUriPrefix Google Cloud Storage URI to output directory, up to 2000
 *                                                          characters long.
 *                                                          Accepted forms:
 *                                                          * Prefix path: gs://bucket/directory
 *                                                          The requesting user must have write permission to the bucket.
 *                                                          The directory is created if it doesn't exist.
 */
function export_data_sample(
    string $formattedName,
    string $outputConfigGcsDestinationOutputUriPrefix
): void {
    // Create a client.
    $autoMlClient = new AutoMlClient();

    // Prepare any non-scalar elements to be passed along with the request.
    $outputConfigGcsDestination = (new GcsDestination())
        ->setOutputUriPrefix($outputConfigGcsDestinationOutputUriPrefix);
    $outputConfig = (new OutputConfig())
        ->setGcsDestination($outputConfigGcsDestination);

    // Call the API and handle any network failures.
    try {
        /** @var OperationResponse $response */
        $response = $autoMlClient->exportData($formattedName, $outputConfig);
        $response->pollUntilComplete();

        if ($response->operationSucceeded()) {
            printf('Operation completed successfully.' . PHP_EOL);
        } else {
            /** @var Status $error */
            $error = $response->getError();
            printf('Operation failed with error data: %s' . PHP_EOL, $error->serializeToJsonString());
        }
    } catch (ApiException $ex) {
        printf('Call failed with message: %s' . PHP_EOL, $ex->getMessage());
    }
}

/**
 * Helper to execute the sample.
 *
 * This sample has been automatically generated and should be regarded as a code
 * template only. It will require modifications to work:
 *  - It may require correct/in-range values for request initialization.
 *  - It may require specifying regional endpoints when creating the service client,
 *    please see the apiEndpoint client configuration option for more details.
 */
function callSample(): void
{
    $formattedName = AutoMlClient::datasetName('[PROJECT]', '[LOCATION]', '[DATASET]');
    $outputConfigGcsDestinationOutputUriPrefix = '[OUTPUT_URI_PREFIX]';

    export_data_sample($formattedName, $outputConfigGcsDestinationOutputUriPrefix);
}
// [END automl_v1_generated_AutoMl_ExportData_sync]
