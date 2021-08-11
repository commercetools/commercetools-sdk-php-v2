<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Cart\CartDraft;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyCarts extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/carts', $args, $client);
    }

    /**
     */
    public function replicate(): ResourceByProjectKeyCartsReplicate
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyCartsReplicate($args, $this->getClient());
    }
    /**
     */
    public function withCustomerId(string $customerId = null): ResourceByProjectKeyCartsCustomerIdByCustomerId
    {
        $args = $this->getArgs();
        if (!is_null($customerId)) {
            $args['customerId'] = $customerId;
        }

        return new ResourceByProjectKeyCartsCustomerIdByCustomerId($args, $this->getClient());
    }
    /**
     */
    public function withKey(string $key = null): ResourceByProjectKeyCartsKeyByKey
    {
        $args = $this->getArgs();
        if (!is_null($key)) {
            $args['key'] = $key;
        }

        return new ResourceByProjectKeyCartsKeyByKey($args, $this->getClient());
    }
    /**
     */
    public function withId(string $ID = null): ResourceByProjectKeyCartsByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyCartsByID($args, $this->getClient());
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyCartsGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyCartsGet($args['projectKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?CartDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?CartDraft $body = null, array $headers = []): ByProjectKeyCartsPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyCartsPost($args['projectKey'], $body, $headers, $this->getClient());
    }
}
