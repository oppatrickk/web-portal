<?php
/*
 * Copyright 2016 Google LLC
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
 * This file was generated from the file
 * https://github.com/google/googleapis/blob/master/google/logging/v2/logging_config.proto
 * and updates to that file get reflected here through a refresh process.
 *
 * @experimental
 */

namespace Google\Cloud\Logging\V2\Gapic;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\FetchAuthTokenInterface;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\PathTemplate;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Cloud\Logging\V2\CreateExclusionRequest;
use Google\Cloud\Logging\V2\CreateSinkRequest;
use Google\Cloud\Logging\V2\DeleteExclusionRequest;
use Google\Cloud\Logging\V2\DeleteSinkRequest;
use Google\Cloud\Logging\V2\GetExclusionRequest;
use Google\Cloud\Logging\V2\GetSinkRequest;
use Google\Cloud\Logging\V2\ListExclusionsRequest;
use Google\Cloud\Logging\V2\ListExclusionsResponse;
use Google\Cloud\Logging\V2\ListSinksRequest;
use Google\Cloud\Logging\V2\ListSinksResponse;
use Google\Cloud\Logging\V2\LogExclusion;
use Google\Cloud\Logging\V2\LogSink;
use Google\Cloud\Logging\V2\UpdateExclusionRequest;
use Google\Cloud\Logging\V2\UpdateSinkRequest;
use Google\Protobuf\FieldMask;
use Google\Protobuf\GPBEmpty;

/**
 * Service Description: Service for configuring sinks used to export log entries outside of
 * Stackdriver Logging.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $configServiceV2Client = new ConfigServiceV2Client();
 * try {
 *     $formattedParent = $configServiceV2Client->projectName('[PROJECT]');
 *     // Iterate through all elements
 *     $pagedResponse = $configServiceV2Client->listSinks($formattedParent);
 *     foreach ($pagedResponse->iterateAllElements() as $element) {
 *         // doSomethingWith($element);
 *     }
 *
 *     // OR iterate over pages of elements
 *     $pagedResponse = $configServiceV2Client->listSinks($formattedParent);
 *     foreach ($pagedResponse->iteratePages() as $page) {
 *         foreach ($page as $element) {
 *             // doSomethingWith($element);
 *         }
 *     }
 * } finally {
 *     $configServiceV2Client->close();
 * }
 * ```
 *
 * Many parameters require resource names to be formatted in a particular way. To assist
 * with these names, this class includes a format method for each type of name, and additionally
 * a parseName method to extract the individual identifiers contained within formatted names
 * that are returned by the API.
 *
 * @experimental
 */
class ConfigServiceV2GapicClient
{
    use GapicClientTrait;

    /**
     * The name of the service.
     */
    const SERVICE_NAME = 'google.logging.v2.ConfigServiceV2';

    /**
     * The default address of the service.
     */
    const SERVICE_ADDRESS = 'logging.googleapis.com';

    /**
     * The default port of the service.
     */
    const DEFAULT_SERVICE_PORT = 443;

    /**
     * The name of the code generator, to be included in the agent header.
     */
    const CODEGEN_NAME = 'gapic';

    /**
     * The default scopes required by the service.
     */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/cloud-platform',
        'https://www.googleapis.com/auth/cloud-platform.read-only',
        'https://www.googleapis.com/auth/logging.admin',
        'https://www.googleapis.com/auth/logging.read',
        'https://www.googleapis.com/auth/logging.write',
    ];
    private static $projectNameTemplate;
    private static $sinkNameTemplate;
    private static $exclusionNameTemplate;
    private static $pathTemplateMap;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'serviceAddress' => self::SERVICE_ADDRESS.':'.self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__.'/../resources/config_service_v2_client_config.json',
            'descriptorsConfigPath' => __DIR__.'/../resources/config_service_v2_descriptor_config.php',
            'credentialsConfig' => [
                'scopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__.'/../resources/config_service_v2_rest_client_config.php',
                ],
            ],
        ];
    }

    private static function getProjectNameTemplate()
    {
        if (self::$projectNameTemplate == null) {
            self::$projectNameTemplate = new PathTemplate('projects/{project}');
        }

        return self::$projectNameTemplate;
    }

    private static function getSinkNameTemplate()
    {
        if (self::$sinkNameTemplate == null) {
            self::$sinkNameTemplate = new PathTemplate('projects/{project}/sinks/{sink}');
        }

        return self::$sinkNameTemplate;
    }

    private static function getExclusionNameTemplate()
    {
        if (self::$exclusionNameTemplate == null) {
            self::$exclusionNameTemplate = new PathTemplate('projects/{project}/exclusions/{exclusion}');
        }

        return self::$exclusionNameTemplate;
    }

    private static function getPathTemplateMap()
    {
        if (self::$pathTemplateMap == null) {
            self::$pathTemplateMap = [
                'project' => self::getProjectNameTemplate(),
                'sink' => self::getSinkNameTemplate(),
                'exclusion' => self::getExclusionNameTemplate(),
            ];
        }

        return self::$pathTemplateMap;
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a project resource.
     *
     * @param string $project
     *
     * @return string The formatted project resource.
     * @experimental
     */
    public static function projectName($project)
    {
        return self::getProjectNameTemplate()->render([
            'project' => $project,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a sink resource.
     *
     * @param string $project
     * @param string $sink
     *
     * @return string The formatted sink resource.
     * @experimental
     */
    public static function sinkName($project, $sink)
    {
        return self::getSinkNameTemplate()->render([
            'project' => $project,
            'sink' => $sink,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a exclusion resource.
     *
     * @param string $project
     * @param string $exclusion
     *
     * @return string The formatted exclusion resource.
     * @experimental
     */
    public static function exclusionName($project, $exclusion)
    {
        return self::getExclusionNameTemplate()->render([
            'project' => $project,
            'exclusion' => $exclusion,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - project: projects/{project}
     * - sink: projects/{project}/sinks/{sink}
     * - exclusion: projects/{project}/exclusions/{exclusion}.
     *
     * The optional $template argument can be supplied to specify a particular pattern, and must
     * match one of the templates listed above. If no $template argument is provided, or if the
     * $template argument does not match one of the templates listed, then parseName will check
     * each of the supported templates, and return the first match.
     *
     * @param string $formattedName The formatted name string
     * @param string $template      Optional name of template to match
     *
     * @return array An associative array from name component IDs to component values.
     *
     * @throws ValidationException If $formattedName could not be matched.
     * @experimental
     */
    public static function parseName($formattedName, $template = null)
    {
        $templateMap = self::getPathTemplateMap();

        if ($template) {
            if (!isset($templateMap[$template])) {
                throw new ValidationException("Template name $template does not exist");
            }

            return $templateMap[$template]->match($formattedName);
        }

        foreach ($templateMap as $templateName => $pathTemplate) {
            try {
                return $pathTemplate->match($formattedName);
            } catch (ValidationException $ex) {
                // Swallow the exception to continue trying other path templates
            }
        }
        throw new ValidationException("Input did not match any known format. Input: $formattedName");
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *                       Optional. Options for configuring the service API wrapper.
     *
     *     @type string $serviceAddress
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'logging.googleapis.com:443'.
     *     @type string|array|FetchAuthTokenInterface|CredentialsWrapper $credentials
     *           The credentials to be used by the client to authorize API calls. This option
     *           accepts either a path to a credentials file, or a decoded credentials file as a
     *           PHP array.
     *           *Advanced usage*: In addition, this option can also accept a pre-constructed
     *           {@see \Google\Auth\FetchAuthTokenInterface} object or
     *           {@see \Google\ApiCore\CredentialsWrapper} object. Note that when one of these
     *           objects are provided, any settings in $credentialsConfig will be ignored.
     *     @type array $credentialsConfig
     *           Options used to configure credentials, including auth token caching, for the client.
     *           For a full list of supporting configuration options, see
     *           {@see \Google\ApiCore\CredentialsWrapper::build()}.
     *     @type bool $disableRetries
     *           Determines whether or not retries defined by the client configuration should be
     *           disabled. Defaults to `false`.
     *     @type string|array $clientConfig
     *           Client method configuration, including retry settings. This option can be either a
     *           path to a JSON file, or a PHP array containing the decoded JSON data.
     *           By default this settings points to the default client config file, which is provided
     *           in the resources folder.
     *     @type string|TransportInterface $transport
     *           The transport used for executing network requests. May be either the string `rest`
     *           or `grpc`. Defaults to `grpc` if gRPC support is detected on the system.
     *           *Advanced usage*: Additionally, it is possible to pass in an already instantiated
     *           {@see \Google\ApiCore\Transport\TransportInterface} object. Note that when this
     *           object is provided, any settings in $transportConfig, and any $serviceAddress
     *           setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'grpc' => [...],
     *               'rest' => [...]
     *           ];
     *           See the {@see \Google\ApiCore\Transport\GrpcTransport::build()} and
     *           {@see \Google\ApiCore\Transport\RestTransport::build()} methods for the
     *           supported options.
     * }
     *
     * @throws ValidationException
     * @experimental
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
    }

    /**
     * Lists sinks.
     *
     * Sample code:
     * ```
     * $configServiceV2Client = new ConfigServiceV2Client();
     * try {
     *     $formattedParent = $configServiceV2Client->projectName('[PROJECT]');
     *     // Iterate through all elements
     *     $pagedResponse = $configServiceV2Client->listSinks($formattedParent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     *
     *     // OR iterate over pages of elements
     *     $pagedResponse = $configServiceV2Client->listSinks($formattedParent);
     *     foreach ($pagedResponse->iteratePages() as $page) {
     *         foreach ($page as $element) {
     *             // doSomethingWith($element);
     *         }
     *     }
     * } finally {
     *     $configServiceV2Client->close();
     * }
     * ```
     *
     * @param string $parent Required. The parent resource whose sinks are to be listed:
     *
     *     "projects/[PROJECT_ID]"
     *     "organizations/[ORGANIZATION_ID]"
     *     "billingAccounts/[BILLING_ACCOUNT_ID]"
     *     "folders/[FOLDER_ID]"
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $pageToken
     *          A page token is used to specify a page of values to be returned.
     *          If no page token is specified (the default), the first page
     *          of values will be returned. Any page token used here must have
     *          been generated by a previous call to the API.
     *     @type int $pageSize
     *          The maximum number of resources contained in the underlying API
     *          response. The API may return fewer values in a page, even if
     *          there are additional values to be retrieved.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\PagedListResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function listSinks($parent, array $optionalArgs = [])
    {
        $request = new ListSinksRequest();
        $request->setParent($parent);
        if (isset($optionalArgs['pageToken'])) {
            $request->setPageToken($optionalArgs['pageToken']);
        }
        if (isset($optionalArgs['pageSize'])) {
            $request->setPageSize($optionalArgs['pageSize']);
        }

        return $this->getPagedListResponse(
            'ListSinks',
            $optionalArgs,
            ListSinksResponse::class,
            $request
        );
    }

    /**
     * Gets a sink.
     *
     * Sample code:
     * ```
     * $configServiceV2Client = new ConfigServiceV2Client();
     * try {
     *     $formattedSinkName = $configServiceV2Client->sinkName('[PROJECT]', '[SINK]');
     *     $response = $configServiceV2Client->getSink($formattedSinkName);
     * } finally {
     *     $configServiceV2Client->close();
     * }
     * ```
     *
     * @param string $sinkName Required. The resource name of the sink:
     *
     *     "projects/[PROJECT_ID]/sinks/[SINK_ID]"
     *     "organizations/[ORGANIZATION_ID]/sinks/[SINK_ID]"
     *     "billingAccounts/[BILLING_ACCOUNT_ID]/sinks/[SINK_ID]"
     *     "folders/[FOLDER_ID]/sinks/[SINK_ID]"
     *
     * Example: `"projects/my-project-id/sinks/my-sink-id"`.
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Logging\V2\LogSink
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function getSink($sinkName, array $optionalArgs = [])
    {
        $request = new GetSinkRequest();
        $request->setSinkName($sinkName);

        return $this->startCall(
            'GetSink',
            LogSink::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Creates a sink that exports specified log entries to a destination.  The
     * export of newly-ingested log entries begins immediately, unless the sink's
     * `writer_identity` is not permitted to write to the destination.  A sink can
     * export log entries only from the resource owning the sink.
     *
     * Sample code:
     * ```
     * $configServiceV2Client = new ConfigServiceV2Client();
     * try {
     *     $formattedParent = $configServiceV2Client->projectName('[PROJECT]');
     *     $sink = new LogSink();
     *     $response = $configServiceV2Client->createSink($formattedParent, $sink);
     * } finally {
     *     $configServiceV2Client->close();
     * }
     * ```
     *
     * @param string $parent Required. The resource in which to create the sink:
     *
     *     "projects/[PROJECT_ID]"
     *     "organizations/[ORGANIZATION_ID]"
     *     "billingAccounts/[BILLING_ACCOUNT_ID]"
     *     "folders/[FOLDER_ID]"
     *
     * Examples: `"projects/my-logging-project"`, `"organizations/123456789"`.
     * @param LogSink $sink         Required. The new sink, whose `name` parameter is a sink identifier that
     *                              is not already in use.
     * @param array   $optionalArgs {
     *                              Optional.
     *
     *     @type bool $uniqueWriterIdentity
     *          Optional. Determines the kind of IAM identity returned as `writer_identity`
     *          in the new sink.  If this value is omitted or set to false, and if the
     *          sink's parent is a project, then the value returned as `writer_identity` is
     *          the same group or service account used by Stackdriver Logging before the
     *          addition of writer identities to this API. The sink's destination must be
     *          in the same project as the sink itself.
     *
     *          If this field is set to true, or if the sink is owned by a non-project
     *          resource such as an organization, then the value of `writer_identity` will
     *          be a unique service account used only for exports from the new sink.  For
     *          more information, see `writer_identity` in [LogSink][google.logging.v2.LogSink].
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Logging\V2\LogSink
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function createSink($parent, $sink, array $optionalArgs = [])
    {
        $request = new CreateSinkRequest();
        $request->setParent($parent);
        $request->setSink($sink);
        if (isset($optionalArgs['uniqueWriterIdentity'])) {
            $request->setUniqueWriterIdentity($optionalArgs['uniqueWriterIdentity']);
        }

        return $this->startCall(
            'CreateSink',
            LogSink::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Updates a sink.  This method replaces the following fields in the existing
     * sink with values from the new sink: `destination`, and `filter`.
     * The updated sink might also have a new `writer_identity`; see the
     * `unique_writer_identity` field.
     *
     * Sample code:
     * ```
     * $configServiceV2Client = new ConfigServiceV2Client();
     * try {
     *     $formattedSinkName = $configServiceV2Client->sinkName('[PROJECT]', '[SINK]');
     *     $sink = new LogSink();
     *     $response = $configServiceV2Client->updateSink($formattedSinkName, $sink);
     * } finally {
     *     $configServiceV2Client->close();
     * }
     * ```
     *
     * @param string $sinkName Required. The full resource name of the sink to update, including the
     *                         parent resource and the sink identifier:
     *
     *     "projects/[PROJECT_ID]/sinks/[SINK_ID]"
     *     "organizations/[ORGANIZATION_ID]/sinks/[SINK_ID]"
     *     "billingAccounts/[BILLING_ACCOUNT_ID]/sinks/[SINK_ID]"
     *     "folders/[FOLDER_ID]/sinks/[SINK_ID]"
     *
     * Example: `"projects/my-project-id/sinks/my-sink-id"`.
     * @param LogSink $sink         Required. The updated sink, whose name is the same identifier that appears
     *                              as part of `sink_name`.
     * @param array   $optionalArgs {
     *                              Optional.
     *
     *     @type bool $uniqueWriterIdentity
     *          Optional. See
     *          [sinks.create](https://cloud.google.com/logging/docs/api/reference/rest/v2/projects.sinks/create)
     *          for a description of this field.  When updating a sink, the effect of this
     *          field on the value of `writer_identity` in the updated sink depends on both
     *          the old and new values of this field:
     *
     *          +   If the old and new values of this field are both false or both true,
     *              then there is no change to the sink's `writer_identity`.
     *          +   If the old value is false and the new value is true, then
     *              `writer_identity` is changed to a unique service account.
     *          +   It is an error if the old value is true and the new value is
     *              set to false or defaulted to false.
     *     @type FieldMask $updateMask
     *          Optional. Field mask that specifies the fields in `sink` that need
     *          an update. A sink field will be overwritten if, and only if, it is
     *          in the update mask.  `name` and output only fields cannot be updated.
     *
     *          An empty updateMask is temporarily treated as using the following mask
     *          for backwards compatibility purposes:
     *            destination,filter,includeChildren
     *          At some point in the future, behavior will be removed and specifying an
     *          empty updateMask will be an error.
     *
     *          For a detailed `FieldMask` definition, see
     *          https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#fieldmask
     *
     *          Example: `updateMask=filter`.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Logging\V2\LogSink
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function updateSink($sinkName, $sink, array $optionalArgs = [])
    {
        $request = new UpdateSinkRequest();
        $request->setSinkName($sinkName);
        $request->setSink($sink);
        if (isset($optionalArgs['uniqueWriterIdentity'])) {
            $request->setUniqueWriterIdentity($optionalArgs['uniqueWriterIdentity']);
        }
        if (isset($optionalArgs['updateMask'])) {
            $request->setUpdateMask($optionalArgs['updateMask']);
        }

        return $this->startCall(
            'UpdateSink',
            LogSink::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Deletes a sink. If the sink has a unique `writer_identity`, then that
     * service account is also deleted.
     *
     * Sample code:
     * ```
     * $configServiceV2Client = new ConfigServiceV2Client();
     * try {
     *     $formattedSinkName = $configServiceV2Client->sinkName('[PROJECT]', '[SINK]');
     *     $configServiceV2Client->deleteSink($formattedSinkName);
     * } finally {
     *     $configServiceV2Client->close();
     * }
     * ```
     *
     * @param string $sinkName Required. The full resource name of the sink to delete, including the
     *                         parent resource and the sink identifier:
     *
     *     "projects/[PROJECT_ID]/sinks/[SINK_ID]"
     *     "organizations/[ORGANIZATION_ID]/sinks/[SINK_ID]"
     *     "billingAccounts/[BILLING_ACCOUNT_ID]/sinks/[SINK_ID]"
     *     "folders/[FOLDER_ID]/sinks/[SINK_ID]"
     *
     * Example: `"projects/my-project-id/sinks/my-sink-id"`.
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function deleteSink($sinkName, array $optionalArgs = [])
    {
        $request = new DeleteSinkRequest();
        $request->setSinkName($sinkName);

        return $this->startCall(
            'DeleteSink',
            GPBEmpty::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Lists all the exclusions in a parent resource.
     *
     * Sample code:
     * ```
     * $configServiceV2Client = new ConfigServiceV2Client();
     * try {
     *     $formattedParent = $configServiceV2Client->projectName('[PROJECT]');
     *     // Iterate through all elements
     *     $pagedResponse = $configServiceV2Client->listExclusions($formattedParent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     *
     *     // OR iterate over pages of elements
     *     $pagedResponse = $configServiceV2Client->listExclusions($formattedParent);
     *     foreach ($pagedResponse->iteratePages() as $page) {
     *         foreach ($page as $element) {
     *             // doSomethingWith($element);
     *         }
     *     }
     * } finally {
     *     $configServiceV2Client->close();
     * }
     * ```
     *
     * @param string $parent Required. The parent resource whose exclusions are to be listed.
     *
     *     "projects/[PROJECT_ID]"
     *     "organizations/[ORGANIZATION_ID]"
     *     "billingAccounts/[BILLING_ACCOUNT_ID]"
     *     "folders/[FOLDER_ID]"
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $pageToken
     *          A page token is used to specify a page of values to be returned.
     *          If no page token is specified (the default), the first page
     *          of values will be returned. Any page token used here must have
     *          been generated by a previous call to the API.
     *     @type int $pageSize
     *          The maximum number of resources contained in the underlying API
     *          response. The API may return fewer values in a page, even if
     *          there are additional values to be retrieved.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\PagedListResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function listExclusions($parent, array $optionalArgs = [])
    {
        $request = new ListExclusionsRequest();
        $request->setParent($parent);
        if (isset($optionalArgs['pageToken'])) {
            $request->setPageToken($optionalArgs['pageToken']);
        }
        if (isset($optionalArgs['pageSize'])) {
            $request->setPageSize($optionalArgs['pageSize']);
        }

        return $this->getPagedListResponse(
            'ListExclusions',
            $optionalArgs,
            ListExclusionsResponse::class,
            $request
        );
    }

    /**
     * Gets the description of an exclusion.
     *
     * Sample code:
     * ```
     * $configServiceV2Client = new ConfigServiceV2Client();
     * try {
     *     $formattedName = $configServiceV2Client->exclusionName('[PROJECT]', '[EXCLUSION]');
     *     $response = $configServiceV2Client->getExclusion($formattedName);
     * } finally {
     *     $configServiceV2Client->close();
     * }
     * ```
     *
     * @param string $name Required. The resource name of an existing exclusion:
     *
     *     "projects/[PROJECT_ID]/exclusions/[EXCLUSION_ID]"
     *     "organizations/[ORGANIZATION_ID]/exclusions/[EXCLUSION_ID]"
     *     "billingAccounts/[BILLING_ACCOUNT_ID]/exclusions/[EXCLUSION_ID]"
     *     "folders/[FOLDER_ID]/exclusions/[EXCLUSION_ID]"
     *
     * Example: `"projects/my-project-id/exclusions/my-exclusion-id"`.
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Logging\V2\LogExclusion
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function getExclusion($name, array $optionalArgs = [])
    {
        $request = new GetExclusionRequest();
        $request->setName($name);

        return $this->startCall(
            'GetExclusion',
            LogExclusion::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Creates a new exclusion in a specified parent resource.
     * Only log entries belonging to that resource can be excluded.
     * You can have up to 10 exclusions in a resource.
     *
     * Sample code:
     * ```
     * $configServiceV2Client = new ConfigServiceV2Client();
     * try {
     *     $formattedParent = $configServiceV2Client->projectName('[PROJECT]');
     *     $exclusion = new LogExclusion();
     *     $response = $configServiceV2Client->createExclusion($formattedParent, $exclusion);
     * } finally {
     *     $configServiceV2Client->close();
     * }
     * ```
     *
     * @param string $parent Required. The parent resource in which to create the exclusion:
     *
     *     "projects/[PROJECT_ID]"
     *     "organizations/[ORGANIZATION_ID]"
     *     "billingAccounts/[BILLING_ACCOUNT_ID]"
     *     "folders/[FOLDER_ID]"
     *
     * Examples: `"projects/my-logging-project"`, `"organizations/123456789"`.
     * @param LogExclusion $exclusion    Required. The new exclusion, whose `name` parameter is an exclusion name
     *                                   that is not already used in the parent resource.
     * @param array        $optionalArgs {
     *                                   Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Logging\V2\LogExclusion
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function createExclusion($parent, $exclusion, array $optionalArgs = [])
    {
        $request = new CreateExclusionRequest();
        $request->setParent($parent);
        $request->setExclusion($exclusion);

        return $this->startCall(
            'CreateExclusion',
            LogExclusion::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Changes one or more properties of an existing exclusion.
     *
     * Sample code:
     * ```
     * $configServiceV2Client = new ConfigServiceV2Client();
     * try {
     *     $formattedName = $configServiceV2Client->exclusionName('[PROJECT]', '[EXCLUSION]');
     *     $exclusion = new LogExclusion();
     *     $updateMask = new FieldMask();
     *     $response = $configServiceV2Client->updateExclusion($formattedName, $exclusion, $updateMask);
     * } finally {
     *     $configServiceV2Client->close();
     * }
     * ```
     *
     * @param string $name Required. The resource name of the exclusion to update:
     *
     *     "projects/[PROJECT_ID]/exclusions/[EXCLUSION_ID]"
     *     "organizations/[ORGANIZATION_ID]/exclusions/[EXCLUSION_ID]"
     *     "billingAccounts/[BILLING_ACCOUNT_ID]/exclusions/[EXCLUSION_ID]"
     *     "folders/[FOLDER_ID]/exclusions/[EXCLUSION_ID]"
     *
     * Example: `"projects/my-project-id/exclusions/my-exclusion-id"`.
     * @param LogExclusion $exclusion  Required. New values for the existing exclusion. Only the fields specified
     *                                 in `update_mask` are relevant.
     * @param FieldMask    $updateMask Required. A nonempty list of fields to change in the existing exclusion.
     *                                 New values for the fields are taken from the corresponding fields in the
     *                                 [LogExclusion][google.logging.v2.LogExclusion] included in this request. Fields not mentioned in
     *                                 `update_mask` are not changed and are ignored in the request.
     *
     * For example, to change the filter and description of an exclusion,
     * specify an `update_mask` of `"filter,description"`.
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Logging\V2\LogExclusion
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function updateExclusion($name, $exclusion, $updateMask, array $optionalArgs = [])
    {
        $request = new UpdateExclusionRequest();
        $request->setName($name);
        $request->setExclusion($exclusion);
        $request->setUpdateMask($updateMask);

        return $this->startCall(
            'UpdateExclusion',
            LogExclusion::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Deletes an exclusion.
     *
     * Sample code:
     * ```
     * $configServiceV2Client = new ConfigServiceV2Client();
     * try {
     *     $formattedName = $configServiceV2Client->exclusionName('[PROJECT]', '[EXCLUSION]');
     *     $configServiceV2Client->deleteExclusion($formattedName);
     * } finally {
     *     $configServiceV2Client->close();
     * }
     * ```
     *
     * @param string $name Required. The resource name of an existing exclusion to delete:
     *
     *     "projects/[PROJECT_ID]/exclusions/[EXCLUSION_ID]"
     *     "organizations/[ORGANIZATION_ID]/exclusions/[EXCLUSION_ID]"
     *     "billingAccounts/[BILLING_ACCOUNT_ID]/exclusions/[EXCLUSION_ID]"
     *     "folders/[FOLDER_ID]/exclusions/[EXCLUSION_ID]"
     *
     * Example: `"projects/my-project-id/exclusions/my-exclusion-id"`.
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function deleteExclusion($name, array $optionalArgs = [])
    {
        $request = new DeleteExclusionRequest();
        $request->setName($name);

        return $this->startCall(
            'DeleteExclusion',
            GPBEmpty::class,
            $optionalArgs,
            $request
        )->wait();
    }
}
