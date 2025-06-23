<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\DiscountGroup\DiscountGroupDraft;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyDiscountGroups extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ?ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/discount-groups', $args, $client);
    }

    /**
     */
    public function withKey(?string $key = null): ResourceByProjectKeyDiscountGroupsKeyByKey
    {
        $args = $this->getArgs();
        if (!is_null($key)) {
            $args['key'] = $key;
        }

        return new ResourceByProjectKeyDiscountGroupsKeyByKey($args, $this->getClient());
    }
    /**
     */
    public function withId(?string $ID = null): ResourceByProjectKeyDiscountGroupsByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyDiscountGroupsByID($args, $this->getClient());
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyDiscountGroupsGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyDiscountGroupsGet($args['projectKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function head($body = null, array $headers = []): ByProjectKeyDiscountGroupsHead
    {
        $args = $this->getArgs();

        return new ByProjectKeyDiscountGroupsHead($args['projectKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?DiscountGroupDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?DiscountGroupDraft $body = null, array $headers = []): ByProjectKeyDiscountGroupsPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyDiscountGroupsPost($args['projectKey'], $body, $headers, $this->getClient());
    }
}
