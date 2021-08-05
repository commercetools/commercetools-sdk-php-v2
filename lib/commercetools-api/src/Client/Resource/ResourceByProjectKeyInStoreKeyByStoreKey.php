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
class ResourceByProjectKeyInStoreKeyByStoreKey extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/in-store/key={storeKey}', $args, $client);
    }

    /**
     */
    public function carts(): ResourceByProjectKeyInStoreKeyByStoreKeyCarts
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyInStoreKeyByStoreKeyCarts($args, $this->getClient());
    }
    /**
     */
    public function orders(): ResourceByProjectKeyInStoreKeyByStoreKeyOrders
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyInStoreKeyByStoreKeyOrders($args, $this->getClient());
    }
    /**
     */
    public function me(): ResourceByProjectKeyInStoreKeyByStoreKeyMe
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyInStoreKeyByStoreKeyMe($args, $this->getClient());
    }
    /**
     */
    public function customers(): ResourceByProjectKeyInStoreKeyByStoreKeyCustomers
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyInStoreKeyByStoreKeyCustomers($args, $this->getClient());
    }
    /**
     */
    public function login(): ResourceByProjectKeyInStoreKeyByStoreKeyLogin
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyInStoreKeyByStoreKeyLogin($args, $this->getClient());
    }
    /**
     */
    public function shippingMethods(): ResourceByProjectKeyInStoreKeyByStoreKeyShippingMethods
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyInStoreKeyByStoreKeyShippingMethods($args, $this->getClient());
    }
    /**
     */
    public function shoppingLists(): ResourceByProjectKeyInStoreKeyByStoreKeyShoppingLists
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyInStoreKeyByStoreKeyShoppingLists($args, $this->getClient());
    }
}
