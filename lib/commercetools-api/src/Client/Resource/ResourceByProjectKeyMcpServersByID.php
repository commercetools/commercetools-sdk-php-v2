<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\McpServer\McpServerUpdate;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyMcpServersByID extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ?ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/mcp-servers/{ID}', $args, $client);
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyMcpServersByIDGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyMcpServersByIDGet($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?McpServerUpdate $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?McpServerUpdate $body = null, array $headers = []): ByProjectKeyMcpServersByIDPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyMcpServersByIDPost($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function delete($body = null, array $headers = []): ByProjectKeyMcpServersByIDDelete
    {
        $args = $this->getArgs();

        return new ByProjectKeyMcpServersByIDDelete($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
}
