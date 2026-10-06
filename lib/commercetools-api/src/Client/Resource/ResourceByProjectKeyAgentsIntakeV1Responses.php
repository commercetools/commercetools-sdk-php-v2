<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Agent\AgentResponsesRequest;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyAgentsIntakeV1Responses extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ?ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/agents/intake/v1/responses', $args, $client);
    }

    /**
     * @psalm-param ?AgentResponsesRequest $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?AgentResponsesRequest $body = null, array $headers = []): ByProjectKeyAgentsIntakeV1ResponsesPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyAgentsIntakeV1ResponsesPost($args['projectKey'], $body, $headers, $this->getClient());
    }
}
