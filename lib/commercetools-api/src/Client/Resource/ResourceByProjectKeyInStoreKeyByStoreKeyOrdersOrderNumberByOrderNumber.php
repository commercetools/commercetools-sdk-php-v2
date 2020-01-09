<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Order\OrderUpdate;
use Commercetools\Client\ApiResource;

/** @psalm-suppress PropertyNotSetInConstructor */
class ResourceByProjectKeyInStoreKeyByStoreKeyOrdersOrderNumberByOrderNumber extends ApiResource
{
    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     *
     * @param null|mixed $body
     */
    public function get($body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyOrdersOrderNumberByOrderNumberGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyOrdersOrderNumberByOrderNumberGet((string) $args['projectKey'], (string) $args['storeKey'], (string) $args['orderNumber'], $body, $headers, $this->getClient());
    }

    /**
     * @psalm-param ?OrderUpdate $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?OrderUpdate $body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyOrdersOrderNumberByOrderNumberPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyOrdersOrderNumberByOrderNumberPost((string) $args['projectKey'], (string) $args['storeKey'], (string) $args['orderNumber'], $body, $headers, $this->getClient());
    }

    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     *
     * @param null|mixed $body
     */
    public function delete($body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyOrdersOrderNumberByOrderNumberDelete
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyOrdersOrderNumberByOrderNumberDelete((string) $args['projectKey'], (string) $args['storeKey'], (string) $args['orderNumber'], $body, $headers, $this->getClient());
    }
}
