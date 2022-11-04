<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\AttributeGroup\AttributeGroupDraft;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyAttributeGroups extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/attribute-groups', $args, $client);
    }

    /**
     */
    public function withKey(string $key = null): ResourceByProjectKeyAttributeGroupsKeyByKey
    {
        $args = $this->getArgs();
        if (!is_null($key)) {
            $args['key'] = $key;
        }

        return new ResourceByProjectKeyAttributeGroupsKeyByKey($args, $this->getClient());
    }
    /**
     */
    public function withId(string $ID = null): ResourceByProjectKeyAttributeGroupsByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyAttributeGroupsByID($args, $this->getClient());
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyAttributeGroupsGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyAttributeGroupsGet($args['projectKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?AttributeGroupDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?AttributeGroupDraft $body = null, array $headers = []): ByProjectKeyAttributeGroupsPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyAttributeGroupsPost($args['projectKey'], $body, $headers, $this->getClient());
    }
}
