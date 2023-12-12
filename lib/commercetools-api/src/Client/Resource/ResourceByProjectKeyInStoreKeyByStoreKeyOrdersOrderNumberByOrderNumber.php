<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Order\OrderUpdate;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyInStoreKeyByStoreKeyOrdersOrderNumberByOrderNumber extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/in-store/key={storeKey}/orders/order-number={orderNumber}', $args, $client);
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyOrdersOrderNumberByOrderNumberGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyOrdersOrderNumberByOrderNumberGet($args['projectKey'], $args['storeKey'], $args['orderNumber'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function head($body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyOrdersOrderNumberByOrderNumberHead
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyOrdersOrderNumberByOrderNumberHead($args['projectKey'], $args['storeKey'], $args['orderNumber'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?OrderUpdate $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?OrderUpdate $body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyOrdersOrderNumberByOrderNumberPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyOrdersOrderNumberByOrderNumberPost($args['projectKey'], $args['storeKey'], $args['orderNumber'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function delete($body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyOrdersOrderNumberByOrderNumberDelete
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyOrdersOrderNumberByOrderNumberDelete($args['projectKey'], $args['storeKey'], $args['orderNumber'], $body, $headers, $this->getClient());
    }
}
