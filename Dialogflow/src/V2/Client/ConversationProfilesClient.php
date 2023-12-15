<?php
/*
 * Copyright 2023 Google LLC
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
 * Generated by gapic-generator-php from the file
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/dialogflow/v2/conversation_profile.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\Dialogflow\V2\Client;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\LongRunning\OperationsClient;
use Google\ApiCore\OperationResponse;
use Google\ApiCore\PagedListResponse;
use Google\ApiCore\ResourceHelperTrait;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Dialogflow\V2\ClearSuggestionFeatureConfigOperationMetadata;
use Google\Cloud\Dialogflow\V2\ClearSuggestionFeatureConfigRequest;
use Google\Cloud\Dialogflow\V2\ConversationProfile;
use Google\Cloud\Dialogflow\V2\CreateConversationProfileRequest;
use Google\Cloud\Dialogflow\V2\DeleteConversationProfileRequest;
use Google\Cloud\Dialogflow\V2\GetConversationProfileRequest;
use Google\Cloud\Dialogflow\V2\ListConversationProfilesRequest;
use Google\Cloud\Dialogflow\V2\SetSuggestionFeatureConfigOperationMetadata;
use Google\Cloud\Dialogflow\V2\SetSuggestionFeatureConfigRequest;
use Google\Cloud\Dialogflow\V2\UpdateConversationProfileRequest;
use Google\Cloud\Location\GetLocationRequest;
use Google\Cloud\Location\ListLocationsRequest;
use Google\Cloud\Location\Location;
use Google\LongRunning\Operation;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * Service Description: Service for managing
 * [ConversationProfiles][google.cloud.dialogflow.v2.ConversationProfile].
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * @method PromiseInterface clearSuggestionFeatureConfigAsync(ClearSuggestionFeatureConfigRequest $request, array $optionalArgs = [])
 * @method PromiseInterface createConversationProfileAsync(CreateConversationProfileRequest $request, array $optionalArgs = [])
 * @method PromiseInterface deleteConversationProfileAsync(DeleteConversationProfileRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getConversationProfileAsync(GetConversationProfileRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listConversationProfilesAsync(ListConversationProfilesRequest $request, array $optionalArgs = [])
 * @method PromiseInterface setSuggestionFeatureConfigAsync(SetSuggestionFeatureConfigRequest $request, array $optionalArgs = [])
 * @method PromiseInterface updateConversationProfileAsync(UpdateConversationProfileRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getLocationAsync(GetLocationRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listLocationsAsync(ListLocationsRequest $request, array $optionalArgs = [])
 */
final class ConversationProfilesClient
{
    use GapicClientTrait;
    use ResourceHelperTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.cloud.dialogflow.v2.ConversationProfiles';

    /**
     * The default address of the service.
     *
     * @deprecated SERVICE_ADDRESS_TEMPLATE should be used instead.
     */
    private const SERVICE_ADDRESS = 'dialogflow.googleapis.com';

    /** The address template of the service. */
    private const SERVICE_ADDRESS_TEMPLATE = 'dialogflow.UNIVERSE_DOMAIN';

    /** The default port of the service. */
    private const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    private const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/cloud-platform',
        'https://www.googleapis.com/auth/dialogflow',
    ];

    private $operationsClient;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/conversation_profiles_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/conversation_profiles_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/conversation_profiles_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/conversation_profiles_rest_client_config.php',
                ],
            ],
        ];
    }

    /**
     * Return an OperationsClient object with the same endpoint as $this.
     *
     * @return OperationsClient
     */
    public function getOperationsClient()
    {
        return $this->operationsClient;
    }

    /**
     * Resume an existing long running operation that was previously started by a long
     * running API method. If $methodName is not provided, or does not match a long
     * running API method, then the operation can still be resumed, but the
     * OperationResponse object will not deserialize the final response.
     *
     * @param string $operationName The name of the long running operation
     * @param string $methodName    The name of the method used to start the operation
     *
     * @return OperationResponse
     */
    public function resumeOperation($operationName, $methodName = null)
    {
        $options = isset($this->descriptors[$methodName]['longRunning']) ? $this->descriptors[$methodName]['longRunning'] : [];
        $operation = new OperationResponse($operationName, $this->getOperationsClient(), $options);
        $operation->reload();
        return $operation;
    }

    /**
     * Formats a string containing the fully-qualified path to represent a agent
     * resource.
     *
     * @param string $project
     *
     * @return string The formatted agent resource.
     */
    public static function agentName(string $project): string
    {
        return self::getPathTemplate('agent')->render([
            'project' => $project,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * cx_security_settings resource.
     *
     * @param string $project
     * @param string $location
     * @param string $securitySettings
     *
     * @return string The formatted cx_security_settings resource.
     */
    public static function cXSecuritySettingsName(string $project, string $location, string $securitySettings): string
    {
        return self::getPathTemplate('cXSecuritySettings')->render([
            'project' => $project,
            'location' => $location,
            'security_settings' => $securitySettings,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * conversation_model resource.
     *
     * @param string $project
     * @param string $location
     * @param string $conversationModel
     *
     * @return string The formatted conversation_model resource.
     */
    public static function conversationModelName(string $project, string $location, string $conversationModel): string
    {
        return self::getPathTemplate('conversationModel')->render([
            'project' => $project,
            'location' => $location,
            'conversation_model' => $conversationModel,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * conversation_profile resource.
     *
     * @param string $project
     * @param string $conversationProfile
     *
     * @return string The formatted conversation_profile resource.
     */
    public static function conversationProfileName(string $project, string $conversationProfile): string
    {
        return self::getPathTemplate('conversationProfile')->render([
            'project' => $project,
            'conversation_profile' => $conversationProfile,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a document
     * resource.
     *
     * @param string $project
     * @param string $knowledgeBase
     * @param string $document
     *
     * @return string The formatted document resource.
     */
    public static function documentName(string $project, string $knowledgeBase, string $document): string
    {
        return self::getPathTemplate('document')->render([
            'project' => $project,
            'knowledge_base' => $knowledgeBase,
            'document' => $document,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * knowledge_base resource.
     *
     * @param string $project
     * @param string $knowledgeBase
     *
     * @return string The formatted knowledge_base resource.
     */
    public static function knowledgeBaseName(string $project, string $knowledgeBase): string
    {
        return self::getPathTemplate('knowledgeBase')->render([
            'project' => $project,
            'knowledge_base' => $knowledgeBase,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a location
     * resource.
     *
     * @param string $project
     * @param string $location
     *
     * @return string The formatted location resource.
     */
    public static function locationName(string $project, string $location): string
    {
        return self::getPathTemplate('location')->render([
            'project' => $project,
            'location' => $location,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a project
     * resource.
     *
     * @param string $project
     *
     * @return string The formatted project resource.
     */
    public static function projectName(string $project): string
    {
        return self::getPathTemplate('project')->render([
            'project' => $project,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_agent resource.
     *
     * @param string $project
     *
     * @return string The formatted project_agent resource.
     */
    public static function projectAgentName(string $project): string
    {
        return self::getPathTemplate('projectAgent')->render([
            'project' => $project,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_conversation_model resource.
     *
     * @param string $project
     * @param string $conversationModel
     *
     * @return string The formatted project_conversation_model resource.
     */
    public static function projectConversationModelName(string $project, string $conversationModel): string
    {
        return self::getPathTemplate('projectConversationModel')->render([
            'project' => $project,
            'conversation_model' => $conversationModel,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_conversation_profile resource.
     *
     * @param string $project
     * @param string $conversationProfile
     *
     * @return string The formatted project_conversation_profile resource.
     */
    public static function projectConversationProfileName(string $project, string $conversationProfile): string
    {
        return self::getPathTemplate('projectConversationProfile')->render([
            'project' => $project,
            'conversation_profile' => $conversationProfile,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_knowledge_base resource.
     *
     * @param string $project
     * @param string $knowledgeBase
     *
     * @return string The formatted project_knowledge_base resource.
     */
    public static function projectKnowledgeBaseName(string $project, string $knowledgeBase): string
    {
        return self::getPathTemplate('projectKnowledgeBase')->render([
            'project' => $project,
            'knowledge_base' => $knowledgeBase,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_knowledge_base_document resource.
     *
     * @param string $project
     * @param string $knowledgeBase
     * @param string $document
     *
     * @return string The formatted project_knowledge_base_document resource.
     */
    public static function projectKnowledgeBaseDocumentName(string $project, string $knowledgeBase, string $document): string
    {
        return self::getPathTemplate('projectKnowledgeBaseDocument')->render([
            'project' => $project,
            'knowledge_base' => $knowledgeBase,
            'document' => $document,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_location_agent resource.
     *
     * @param string $project
     * @param string $location
     *
     * @return string The formatted project_location_agent resource.
     */
    public static function projectLocationAgentName(string $project, string $location): string
    {
        return self::getPathTemplate('projectLocationAgent')->render([
            'project' => $project,
            'location' => $location,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_location_conversation_model resource.
     *
     * @param string $project
     * @param string $location
     * @param string $conversationModel
     *
     * @return string The formatted project_location_conversation_model resource.
     */
    public static function projectLocationConversationModelName(string $project, string $location, string $conversationModel): string
    {
        return self::getPathTemplate('projectLocationConversationModel')->render([
            'project' => $project,
            'location' => $location,
            'conversation_model' => $conversationModel,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_location_conversation_profile resource.
     *
     * @param string $project
     * @param string $location
     * @param string $conversationProfile
     *
     * @return string The formatted project_location_conversation_profile resource.
     */
    public static function projectLocationConversationProfileName(string $project, string $location, string $conversationProfile): string
    {
        return self::getPathTemplate('projectLocationConversationProfile')->render([
            'project' => $project,
            'location' => $location,
            'conversation_profile' => $conversationProfile,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_location_knowledge_base resource.
     *
     * @param string $project
     * @param string $location
     * @param string $knowledgeBase
     *
     * @return string The formatted project_location_knowledge_base resource.
     */
    public static function projectLocationKnowledgeBaseName(string $project, string $location, string $knowledgeBase): string
    {
        return self::getPathTemplate('projectLocationKnowledgeBase')->render([
            'project' => $project,
            'location' => $location,
            'knowledge_base' => $knowledgeBase,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_location_knowledge_base_document resource.
     *
     * @param string $project
     * @param string $location
     * @param string $knowledgeBase
     * @param string $document
     *
     * @return string The formatted project_location_knowledge_base_document resource.
     */
    public static function projectLocationKnowledgeBaseDocumentName(string $project, string $location, string $knowledgeBase, string $document): string
    {
        return self::getPathTemplate('projectLocationKnowledgeBaseDocument')->render([
            'project' => $project,
            'location' => $location,
            'knowledge_base' => $knowledgeBase,
            'document' => $document,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - agent: projects/{project}/agent
     * - cXSecuritySettings: projects/{project}/locations/{location}/securitySettings/{security_settings}
     * - conversationModel: projects/{project}/locations/{location}/conversationModels/{conversation_model}
     * - conversationProfile: projects/{project}/conversationProfiles/{conversation_profile}
     * - document: projects/{project}/knowledgeBases/{knowledge_base}/documents/{document}
     * - knowledgeBase: projects/{project}/knowledgeBases/{knowledge_base}
     * - location: projects/{project}/locations/{location}
     * - project: projects/{project}
     * - projectAgent: projects/{project}/agent
     * - projectConversationModel: projects/{project}/conversationModels/{conversation_model}
     * - projectConversationProfile: projects/{project}/conversationProfiles/{conversation_profile}
     * - projectKnowledgeBase: projects/{project}/knowledgeBases/{knowledge_base}
     * - projectKnowledgeBaseDocument: projects/{project}/knowledgeBases/{knowledge_base}/documents/{document}
     * - projectLocationAgent: projects/{project}/locations/{location}/agent
     * - projectLocationConversationModel: projects/{project}/locations/{location}/conversationModels/{conversation_model}
     * - projectLocationConversationProfile: projects/{project}/locations/{location}/conversationProfiles/{conversation_profile}
     * - projectLocationKnowledgeBase: projects/{project}/locations/{location}/knowledgeBases/{knowledge_base}
     * - projectLocationKnowledgeBaseDocument: projects/{project}/locations/{location}/knowledgeBases/{knowledge_base}/documents/{document}
     *
     * The optional $template argument can be supplied to specify a particular pattern,
     * and must match one of the templates listed above. If no $template argument is
     * provided, or if the $template argument does not match one of the templates
     * listed, then parseName will check each of the supported templates, and return
     * the first match.
     *
     * @param string $formattedName The formatted name string
     * @param string $template      Optional name of template to match
     *
     * @return array An associative array from name component IDs to component values.
     *
     * @throws ValidationException If $formattedName could not be matched.
     */
    public static function parseName(string $formattedName, string $template = null): array
    {
        return self::parseFormattedName($formattedName, $template);
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'dialogflow.googleapis.com:443'.
     *     @type string|array|FetchAuthTokenInterface|CredentialsWrapper $credentials
     *           The credentials to be used by the client to authorize API calls. This option
     *           accepts either a path to a credentials file, or a decoded credentials file as a
     *           PHP array.
     *           *Advanced usage*: In addition, this option can also accept a pre-constructed
     *           {@see \Google\Auth\FetchAuthTokenInterface} object or
     *           {@see \Google\ApiCore\CredentialsWrapper} object. Note that when one of these
     *           objects are provided, any settings in $credentialsConfig will be ignored.
     *     @type array $credentialsConfig
     *           Options used to configure credentials, including auth token caching, for the
     *           client. For a full list of supporting configuration options, see
     *           {@see \Google\ApiCore\CredentialsWrapper::build()} .
     *     @type bool $disableRetries
     *           Determines whether or not retries defined by the client configuration should be
     *           disabled. Defaults to `false`.
     *     @type string|array $clientConfig
     *           Client method configuration, including retry settings. This option can be either
     *           a path to a JSON file, or a PHP array containing the decoded JSON data. By
     *           default this settings points to the default client config file, which is
     *           provided in the resources folder.
     *     @type string|TransportInterface $transport
     *           The transport used for executing network requests. May be either the string
     *           `rest` or `grpc`. Defaults to `grpc` if gRPC support is detected on the system.
     *           *Advanced usage*: Additionally, it is possible to pass in an already
     *           instantiated {@see \Google\ApiCore\Transport\TransportInterface} object. Note
     *           that when this object is provided, any settings in $transportConfig, and any
     *           $apiEndpoint setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'grpc' => [...],
     *               'rest' => [...],
     *           ];
     *           See the {@see \Google\ApiCore\Transport\GrpcTransport::build()} and
     *           {@see \Google\ApiCore\Transport\RestTransport::build()} methods for the
     *           supported options.
     *     @type callable $clientCertSource
     *           A callable which returns the client cert as a string. This can be used to
     *           provide a certificate and private key to the transport layer for mTLS.
     * }
     *
     * @throws ValidationException
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
        $this->operationsClient = $this->createOperationsClient($clientOptions);
    }

    /** Handles execution of the async variants for each documented method. */
    public function __call($method, $args)
    {
        if (substr($method, -5) !== 'Async') {
            trigger_error('Call to undefined method ' . __CLASS__ . "::$method()", E_USER_ERROR);
        }

        array_unshift($args, substr($method, 0, -5));
        return call_user_func_array([$this, 'startAsyncCall'], $args);
    }

    /**
     * Clears a suggestion feature from a conversation profile for the given
     * participant role.
     *
     * This method is a [long-running
     * operation](https://cloud.google.com/dialogflow/es/docs/how/long-running-operations).
     * The returned `Operation` type has the following method-specific fields:
     *
     * - `metadata`:
     * [ClearSuggestionFeatureConfigOperationMetadata][google.cloud.dialogflow.v2.ClearSuggestionFeatureConfigOperationMetadata]
     * - `response`:
     * [ConversationProfile][google.cloud.dialogflow.v2.ConversationProfile]
     *
     * The async variant is
     * {@see ConversationProfilesClient::clearSuggestionFeatureConfigAsync()} .
     *
     * @param ClearSuggestionFeatureConfigRequest $request     A request to house fields associated with the call.
     * @param array                               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function clearSuggestionFeatureConfig(ClearSuggestionFeatureConfigRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('ClearSuggestionFeatureConfig', $request, $callOptions)->wait();
    }

    /**
     * Creates a conversation profile in the specified project.
     *
     * [ConversationProfile.CreateTime][] and [ConversationProfile.UpdateTime][]
     * aren't populated in the response. You can retrieve them via
     * [GetConversationProfile][google.cloud.dialogflow.v2.ConversationProfiles.GetConversationProfile]
     * API.
     *
     * The async variant is
     * {@see ConversationProfilesClient::createConversationProfileAsync()} .
     *
     * @param CreateConversationProfileRequest $request     A request to house fields associated with the call.
     * @param array                            $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return ConversationProfile
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function createConversationProfile(CreateConversationProfileRequest $request, array $callOptions = []): ConversationProfile
    {
        return $this->startApiCall('CreateConversationProfile', $request, $callOptions)->wait();
    }

    /**
     * Deletes the specified conversation profile.
     *
     * The async variant is
     * {@see ConversationProfilesClient::deleteConversationProfileAsync()} .
     *
     * @param DeleteConversationProfileRequest $request     A request to house fields associated with the call.
     * @param array                            $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function deleteConversationProfile(DeleteConversationProfileRequest $request, array $callOptions = []): void
    {
        $this->startApiCall('DeleteConversationProfile', $request, $callOptions)->wait();
    }

    /**
     * Retrieves the specified conversation profile.
     *
     * The async variant is
     * {@see ConversationProfilesClient::getConversationProfileAsync()} .
     *
     * @param GetConversationProfileRequest $request     A request to house fields associated with the call.
     * @param array                         $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return ConversationProfile
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getConversationProfile(GetConversationProfileRequest $request, array $callOptions = []): ConversationProfile
    {
        return $this->startApiCall('GetConversationProfile', $request, $callOptions)->wait();
    }

    /**
     * Returns the list of all conversation profiles in the specified project.
     *
     * The async variant is
     * {@see ConversationProfilesClient::listConversationProfilesAsync()} .
     *
     * @param ListConversationProfilesRequest $request     A request to house fields associated with the call.
     * @param array                           $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PagedListResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function listConversationProfiles(ListConversationProfilesRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListConversationProfiles', $request, $callOptions);
    }

    /**
     * Adds or updates a suggestion feature in a conversation profile.
     * If the conversation profile contains the type of suggestion feature for
     * the participant role, it will update it. Otherwise it will insert the
     * suggestion feature.
     *
     * This method is a [long-running
     * operation](https://cloud.google.com/dialogflow/es/docs/how/long-running-operations).
     * The returned `Operation` type has the following method-specific fields:
     *
     * - `metadata`:
     * [SetSuggestionFeatureConfigOperationMetadata][google.cloud.dialogflow.v2.SetSuggestionFeatureConfigOperationMetadata]
     * - `response`:
     * [ConversationProfile][google.cloud.dialogflow.v2.ConversationProfile]
     *
     * If a long running operation to add or update suggestion feature
     * config for the same conversation profile, participant role and suggestion
     * feature type exists, please cancel the existing long running operation
     * before sending such request, otherwise the request will be rejected.
     *
     * The async variant is
     * {@see ConversationProfilesClient::setSuggestionFeatureConfigAsync()} .
     *
     * @param SetSuggestionFeatureConfigRequest $request     A request to house fields associated with the call.
     * @param array                             $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function setSuggestionFeatureConfig(SetSuggestionFeatureConfigRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('SetSuggestionFeatureConfig', $request, $callOptions)->wait();
    }

    /**
     * Updates the specified conversation profile.
     *
     * [ConversationProfile.CreateTime][] and [ConversationProfile.UpdateTime][]
     * aren't populated in the response. You can retrieve them via
     * [GetConversationProfile][google.cloud.dialogflow.v2.ConversationProfiles.GetConversationProfile]
     * API.
     *
     * The async variant is
     * {@see ConversationProfilesClient::updateConversationProfileAsync()} .
     *
     * @param UpdateConversationProfileRequest $request     A request to house fields associated with the call.
     * @param array                            $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return ConversationProfile
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function updateConversationProfile(UpdateConversationProfileRequest $request, array $callOptions = []): ConversationProfile
    {
        return $this->startApiCall('UpdateConversationProfile', $request, $callOptions)->wait();
    }

    /**
     * Gets information about a location.
     *
     * The async variant is {@see ConversationProfilesClient::getLocationAsync()} .
     *
     * @param GetLocationRequest $request     A request to house fields associated with the call.
     * @param array              $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Location
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getLocation(GetLocationRequest $request, array $callOptions = []): Location
    {
        return $this->startApiCall('GetLocation', $request, $callOptions)->wait();
    }

    /**
     * Lists information about the supported locations for this service.
     *
     * The async variant is {@see ConversationProfilesClient::listLocationsAsync()} .
     *
     * @param ListLocationsRequest $request     A request to house fields associated with the call.
     * @param array                $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PagedListResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function listLocations(ListLocationsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListLocations', $request, $callOptions);
    }
}
