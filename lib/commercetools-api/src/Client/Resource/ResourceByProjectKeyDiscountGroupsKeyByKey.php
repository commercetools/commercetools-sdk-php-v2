<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\DiscountGroup\DiscountGroupUpdate;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyDiscountGroupsKeyByKey extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ?ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/discount-groups/key={key}', $args, $client);
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyDiscountGroupsKeyByKeyGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyDiscountGroupsKeyByKeyGet($args['projectKey'], $args['key'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function head($body = null, array $headers = []): ByProjectKeyDiscountGroupsKeyByKeyHead
    {
        $args = $this->getArgs();

        return new ByProjectKeyDiscountGroupsKeyByKeyHead($args['projectKey'], $args['key'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?DiscountGroupUpdate $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?DiscountGroupUpdate $body = null, array $headers = []): ByProjectKeyDiscountGroupsKeyByKeyPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyDiscountGroupsKeyByKeyPost($args['projectKey'], $args['key'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function delete($body = null, array $headers = []): ByProjectKeyDiscountGroupsKeyByKeyDelete
    {
        $args = $this->getArgs();

        return new ByProjectKeyDiscountGroupsKeyByKeyDelete($args['projectKey'], $args['key'], $body, $headers, $this->getClient());
    }
}
