<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\AttributeGroup\AttributeGroupUpdate;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyAttributeGroupsKeyByKey extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/attribute-groups/key={key}', $args, $client);
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyAttributeGroupsKeyByKeyGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyAttributeGroupsKeyByKeyGet($args['projectKey'], $args['key'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function head($body = null, array $headers = []): ByProjectKeyAttributeGroupsKeyByKeyHead
    {
        $args = $this->getArgs();

        return new ByProjectKeyAttributeGroupsKeyByKeyHead($args['projectKey'], $args['key'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?AttributeGroupUpdate $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?AttributeGroupUpdate $body = null, array $headers = []): ByProjectKeyAttributeGroupsKeyByKeyPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyAttributeGroupsKeyByKeyPost($args['projectKey'], $args['key'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function delete($body = null, array $headers = []): ByProjectKeyAttributeGroupsKeyByKeyDelete
    {
        $args = $this->getArgs();

        return new ByProjectKeyAttributeGroupsKeyByKeyDelete($args['projectKey'], $args['key'], $body, $headers, $this->getClient());
    }
}
