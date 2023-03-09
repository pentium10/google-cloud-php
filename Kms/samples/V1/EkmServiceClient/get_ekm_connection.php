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

// [START cloudkms_v1_generated_EkmService_GetEkmConnection_sync]
use Google\ApiCore\ApiException;
use Google\Cloud\Kms\V1\EkmConnection;
use Google\Cloud\Kms\V1\EkmServiceClient;

/**
 * Returns metadata for a given
 * [EkmConnection][google.cloud.kms.v1.EkmConnection].
 *
 * @param string $formattedName The [name][google.cloud.kms.v1.EkmConnection.name] of the
 *                              [EkmConnection][google.cloud.kms.v1.EkmConnection] to get. Please see
 *                              {@see EkmServiceClient::ekmConnectionName()} for help formatting this field.
 */
function get_ekm_connection_sample(string $formattedName): void
{
    // Create a client.
    $ekmServiceClient = new EkmServiceClient();

    // Call the API and handle any network failures.
    try {
        /** @var EkmConnection $response */
        $response = $ekmServiceClient->getEkmConnection($formattedName);
        printf('Response data: %s' . PHP_EOL, $response->serializeToJsonString());
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
    $formattedName = EkmServiceClient::ekmConnectionName('[PROJECT]', '[LOCATION]', '[EKM_CONNECTION]');

    get_ekm_connection_sample($formattedName);
}
// [END cloudkms_v1_generated_EkmService_GetEkmConnection_sync]
