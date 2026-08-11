<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\McpServer\McpServerDraft;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyMcpServers extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ?ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/mcp-servers', $args, $client);
    }

    /**
     */
    public function types(): ResourceByProjectKeyMcpServersTypes
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyMcpServersTypes($args, $this->getClient());
    }
    /**
     */
    public function withKey(?string $key = null): ResourceByProjectKeyMcpServersKeyByKey
    {
        $args = $this->getArgs();
        if (!is_null($key)) {
            $args['key'] = $key;
        }

        return new ResourceByProjectKeyMcpServersKeyByKey($args, $this->getClient());
    }
    /**
     */
    public function withId(?string $ID = null): ResourceByProjectKeyMcpServersByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyMcpServersByID($args, $this->getClient());
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyMcpServersGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyMcpServersGet($args['projectKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?McpServerDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?McpServerDraft $body = null, array $headers = []): ByProjectKeyMcpServersPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyMcpServersPost($args['projectKey'], $body, $headers, $this->getClient());
    }
}
