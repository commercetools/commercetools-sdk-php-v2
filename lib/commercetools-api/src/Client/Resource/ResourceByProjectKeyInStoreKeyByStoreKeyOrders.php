<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Order\OrderFromCartDraft;
use Commercetools\Client\ApiResource;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 * @psalm-immutable
 */
class ResourceByProjectKeyInStoreKeyByStoreKeyOrders extends ApiResource
{
    public function withOrderNumber(string $orderNumber = null): ResourceByProjectKeyInStoreKeyByStoreKeyOrdersOrderNumberByOrderNumber
    {
        $args = $this->getArgs();
        if (!is_null($orderNumber)) {
            $args['orderNumber'] = $orderNumber;
        }

        return new ResourceByProjectKeyInStoreKeyByStoreKeyOrdersOrderNumberByOrderNumber($this->getUri() . '/order-number={orderNumber}', $args, $this->getClient());
    }
    public function withId(string $ID = null): ResourceByProjectKeyInStoreKeyByStoreKeyOrdersByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyInStoreKeyByStoreKeyOrdersByID($this->getUri() . '/{ID}', $args, $this->getClient());
    }

    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyOrdersGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyOrdersGet((string) $args['projectKey'], (string) $args['storeKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?OrderFromCartDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?OrderFromCartDraft $body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyOrdersPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyOrdersPost((string) $args['projectKey'], (string) $args['storeKey'], $body, $headers, $this->getClient());
    }
}
