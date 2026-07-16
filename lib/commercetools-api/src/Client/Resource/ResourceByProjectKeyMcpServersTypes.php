<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyMcpServersTypes extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ?ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/mcp-servers/types', $args, $client);
    }

    /**
     */
    public function withMcpServerType(?string $mcpServerType = null): ResourceByProjectKeyMcpServersTypesByMcpServerType
    {
        $args = $this->getArgs();
        if (!is_null($mcpServerType)) {
            $args['mcpServerType'] = $mcpServerType;
        }

        return new ResourceByProjectKeyMcpServersTypesByMcpServerType($args, $this->getClient());
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyMcpServersTypesGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyMcpServersTypesGet($args['projectKey'], $body, $headers, $this->getClient());
    }
}
