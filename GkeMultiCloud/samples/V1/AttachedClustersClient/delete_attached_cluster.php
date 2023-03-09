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

// [START gkemulticloud_v1_generated_AttachedClusters_DeleteAttachedCluster_sync]
use Google\ApiCore\ApiException;
use Google\ApiCore\OperationResponse;
use Google\Cloud\GkeMultiCloud\V1\AttachedClustersClient;
use Google\Rpc\Status;

/**
 * Deletes a specific
 * [AttachedCluster][google.cloud.gkemulticloud.v1.AttachedCluster] resource.
 *
 * If successful, the response contains a newly created
 * [Operation][google.longrunning.Operation] resource that can be
 * described to track the status of the operation.
 *
 * @param string $formattedName The resource name the
 *                              [AttachedCluster][google.cloud.gkemulticloud.v1.AttachedCluster] to delete.
 *
 *                              `AttachedCluster` names are formatted as
 *                              `projects/<project-id>/locations/<region>/attachedClusters/<cluster-id>`.
 *
 *                              See [Resource Names](https://cloud.google.com/apis/design/resource_names)
 *                              for more details on Google Cloud Platform resource names. Please see
 *                              {@see AttachedClustersClient::attachedClusterName()} for help formatting this field.
 */
function delete_attached_cluster_sample(string $formattedName): void
{
    // Create a client.
    $attachedClustersClient = new AttachedClustersClient();

    // Call the API and handle any network failures.
    try {
        /** @var OperationResponse $response */
        $response = $attachedClustersClient->deleteAttachedCluster($formattedName);
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
    $formattedName = AttachedClustersClient::attachedClusterName(
        '[PROJECT]',
        '[LOCATION]',
        '[ATTACHED_CLUSTER]'
    );

    delete_attached_cluster_sample($formattedName);
}
// [END gkemulticloud_v1_generated_AttachedClusters_DeleteAttachedCluster_sync]
