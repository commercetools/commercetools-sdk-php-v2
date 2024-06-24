<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Order\OrderFromCartDraft;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyInStoreKeyByStoreKeyOrders extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/in-store/key={storeKey}/orders', $args, $client);
    }

    /**
     */
    public function orderQuote(): ResourceByProjectKeyInStoreKeyByStoreKeyOrdersQuotes
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyInStoreKeyByStoreKeyOrdersQuotes($args, $this->getClient());
    }
    /**
     */
    public function withOrderNumber(string $orderNumber = null): ResourceByProjectKeyInStoreKeyByStoreKeyOrdersOrderNumberByOrderNumber
    {
        $args = $this->getArgs();
        if (!is_null($orderNumber)) {
            $args['orderNumber'] = $orderNumber;
        }

        return new ResourceByProjectKeyInStoreKeyByStoreKeyOrdersOrderNumberByOrderNumber($args, $this->getClient());
    }
    /**
     */
    public function withId(string $ID = null): ResourceByProjectKeyInStoreKeyByStoreKeyOrdersByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyInStoreKeyByStoreKeyOrdersByID($args, $this->getClient());
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyOrdersGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyOrdersGet($args['projectKey'], $args['storeKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function head($body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyOrdersHead
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyOrdersHead($args['projectKey'], $args['storeKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?OrderFromCartDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?OrderFromCartDraft $body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyOrdersPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyOrdersPost($args['projectKey'], $args['storeKey'], $body, $headers, $this->getClient());
    }
}
