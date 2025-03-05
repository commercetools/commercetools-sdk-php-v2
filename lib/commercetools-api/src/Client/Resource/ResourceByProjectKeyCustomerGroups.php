<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\CustomerGroup\CustomerGroupDraft;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyCustomerGroups extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ?ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/customer-groups', $args, $client);
    }

    /**
     */
    public function withKey(?string $key = null): ResourceByProjectKeyCustomerGroupsKeyByKey
    {
        $args = $this->getArgs();
        if (!is_null($key)) {
            $args['key'] = $key;
        }

        return new ResourceByProjectKeyCustomerGroupsKeyByKey($args, $this->getClient());
    }
    /**
     */
    public function withId(?string $ID = null): ResourceByProjectKeyCustomerGroupsByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyCustomerGroupsByID($args, $this->getClient());
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyCustomerGroupsGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyCustomerGroupsGet($args['projectKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function head($body = null, array $headers = []): ByProjectKeyCustomerGroupsHead
    {
        $args = $this->getArgs();

        return new ByProjectKeyCustomerGroupsHead($args['projectKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?CustomerGroupDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?CustomerGroupDraft $body = null, array $headers = []): ByProjectKeyCustomerGroupsPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyCustomerGroupsPost($args['projectKey'], $body, $headers, $this->getClient());
    }
}
