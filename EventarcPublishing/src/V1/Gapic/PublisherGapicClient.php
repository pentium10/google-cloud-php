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
 * Generated by gapic-generator-php from the file
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/eventarc/publishing/v1/publisher.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\Eventarc\Publishing\V1\Gapic;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\RequestParamsHeaderDescriptor;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Eventarc\Publishing\V1\PublishChannelConnectionEventsRequest;
use Google\Cloud\Eventarc\Publishing\V1\PublishChannelConnectionEventsResponse;
use Google\Cloud\Eventarc\Publishing\V1\PublishEventsRequest;
use Google\Cloud\Eventarc\Publishing\V1\PublishEventsResponse;
use Google\Protobuf\Any;

/**
 * Service Description: Eventarc processes events generated by an event provider and delivers them to
 * a subscriber.
 *
 * An event provider is a software-as-a-service (SaaS) system or
 * product that can generate and deliver events through Eventarc.
 *
 * A third-party event provider is an event provider from outside of Google.
 *
 * A partner is a third-party event provider that is integrated with Eventarc.
 *
 * A subscriber is a GCP customer interested in receiving events.
 *
 * Channel is a first-class Eventarc resource that is created and managed
 * by the subscriber in their GCP project. A Channel represents a subscriber's
 * intent to receive events from an event provider. A Channel is associated with
 * exactly one event provider.
 *
 * ChannelConnection is a first-class Eventarc resource that
 * is created and managed by the partner in their GCP project. A
 * ChannelConnection represents a connection between a partner and a
 * subscriber's Channel. A ChannelConnection has a one-to-one mapping with a
 * Channel.
 *
 * Publisher allows an event provider to publish events to Eventarc.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $publisherClient = new PublisherClient();
 * try {
 *     $response = $publisherClient->publishChannelConnectionEvents();
 * } finally {
 *     $publisherClient->close();
 * }
 * ```
 */
class PublisherGapicClient
{
    use GapicClientTrait;

    /** The name of the service. */
    const SERVICE_NAME = 'google.cloud.eventarc.publishing.v1.Publisher';

    /** The default address of the service. */
    const SERVICE_ADDRESS = 'eventarcpublishing.googleapis.com';

    /** The default port of the service. */
    const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/cloud-platform',
    ];

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' =>
                self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' =>
                __DIR__ . '/../resources/publisher_client_config.json',
            'descriptorsConfigPath' =>
                __DIR__ . '/../resources/publisher_descriptor_config.php',
            'gcpApiConfigPath' =>
                __DIR__ . '/../resources/publisher_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' =>
                        __DIR__ .
                        '/../resources/publisher_rest_client_config.php',
                ],
            ],
        ];
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'eventarcpublishing.googleapis.com:443'.
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
    }

    /**
     * Publish events to a ChannelConnection in a partner's project.
     *
     * Sample code:
     * ```
     * $publisherClient = new PublisherClient();
     * try {
     *     $response = $publisherClient->publishChannelConnectionEvents();
     * } finally {
     *     $publisherClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *     Optional.
     *
     *     @type string $channelConnection
     *           The channel_connection that the events are published from. For example:
     *           `projects/{partner_project_id}/locations/{location}/channelConnections/{channel_connection_id}`.
     *     @type Any[] $events
     *           The CloudEvents v1.0 events to publish. No other types are allowed.
     *           If this field is set, then the `text_events` fields must not be set.
     *     @type string[] $textEvents
     *           The text representation of events to publish.
     *           CloudEvent v1.0 in JSON format is the only allowed type. Refer to
     *           https://github.com/cloudevents/spec/blob/v1.0.2/cloudevents/formats/json-format.md
     *           for specification.
     *           If this field is set, then the `events` fields must not be set.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Eventarc\Publishing\V1\PublishChannelConnectionEventsResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function publishChannelConnectionEvents(array $optionalArgs = [])
    {
        $request = new PublishChannelConnectionEventsRequest();
        $requestParamHeaders = [];
        if (isset($optionalArgs['channelConnection'])) {
            $request->setChannelConnection($optionalArgs['channelConnection']);
            $requestParamHeaders['channel_connection'] =
                $optionalArgs['channelConnection'];
        }

        if (isset($optionalArgs['events'])) {
            $request->setEvents($optionalArgs['events']);
        }

        if (isset($optionalArgs['textEvents'])) {
            $request->setTextEvents($optionalArgs['textEvents']);
        }

        $requestParams = new RequestParamsHeaderDescriptor(
            $requestParamHeaders
        );
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();
        return $this->startCall(
            'PublishChannelConnectionEvents',
            PublishChannelConnectionEventsResponse::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Publish events to a subscriber's channel.
     *
     * Sample code:
     * ```
     * $publisherClient = new PublisherClient();
     * try {
     *     $response = $publisherClient->publishEvents();
     * } finally {
     *     $publisherClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *     Optional.
     *
     *     @type string $channel
     *           The full name of the channel to publish to. For example:
     *           `projects/{project}/locations/{location}/channels/{channel-id}`.
     *     @type Any[] $events
     *           The CloudEvents v1.0 events to publish. No other types are allowed.
     *           If this field is set, then the `text_events` fields must not be set.
     *     @type string[] $textEvents
     *           The text representation of events to publish.
     *           CloudEvent v1.0 in JSON format is the only allowed type. Refer to
     *           https://github.com/cloudevents/spec/blob/v1.0.2/cloudevents/formats/json-format.md
     *           for specification.
     *           If this field is set, then the `events` fields must not be set.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Eventarc\Publishing\V1\PublishEventsResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function publishEvents(array $optionalArgs = [])
    {
        $request = new PublishEventsRequest();
        $requestParamHeaders = [];
        if (isset($optionalArgs['channel'])) {
            $request->setChannel($optionalArgs['channel']);
            $requestParamHeaders['channel'] = $optionalArgs['channel'];
        }

        if (isset($optionalArgs['events'])) {
            $request->setEvents($optionalArgs['events']);
        }

        if (isset($optionalArgs['textEvents'])) {
            $request->setTextEvents($optionalArgs['textEvents']);
        }

        $requestParams = new RequestParamsHeaderDescriptor(
            $requestParamHeaders
        );
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();
        return $this->startCall(
            'PublishEvents',
            PublishEventsResponse::class,
            $optionalArgs,
            $request
        )->wait();
    }
}
