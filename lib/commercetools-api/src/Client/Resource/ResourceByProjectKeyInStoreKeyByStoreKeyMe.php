<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyInStoreKeyByStoreKeyMe extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/in-store/key={storeKey}/me', $args, $client);
    }

    public function carts(): ResourceByProjectKeyInStoreKeyByStoreKeyMeCarts
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyInStoreKeyByStoreKeyMeCarts($args, $this->getClient());
    }
    public function orders(): ResourceByProjectKeyInStoreKeyByStoreKeyMeOrders
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyInStoreKeyByStoreKeyMeOrders($args, $this->getClient());
    }
    public function activeCart(): ResourceByProjectKeyInStoreKeyByStoreKeyMeActiveCart
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyInStoreKeyByStoreKeyMeActiveCart($args, $this->getClient());
    }
    public function shoppingLists(): ResourceByProjectKeyInStoreKeyByStoreKeyMeShoppingLists
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyInStoreKeyByStoreKeyMeShoppingLists($args, $this->getClient());
    }
}
