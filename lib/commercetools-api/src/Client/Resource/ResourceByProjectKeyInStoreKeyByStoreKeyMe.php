<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Me\MyCustomerUpdate;
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

    /**
     */
    public function carts(): ResourceByProjectKeyInStoreKeyByStoreKeyMeCarts
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyInStoreKeyByStoreKeyMeCarts($args, $this->getClient());
    }
    /**
     */
    public function orders(): ResourceByProjectKeyInStoreKeyByStoreKeyMeOrders
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyInStoreKeyByStoreKeyMeOrders($args, $this->getClient());
    }
    /**
     */
    public function activeCart(): ResourceByProjectKeyInStoreKeyByStoreKeyMeActiveCart
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyInStoreKeyByStoreKeyMeActiveCart($args, $this->getClient());
    }
    /**
     */
    public function shoppingLists(): ResourceByProjectKeyInStoreKeyByStoreKeyMeShoppingLists
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyInStoreKeyByStoreKeyMeShoppingLists($args, $this->getClient());
    }
    /**
     */
    public function emailConfirm(): ResourceByProjectKeyInStoreKeyByStoreKeyMeEmailConfirm
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyInStoreKeyByStoreKeyMeEmailConfirm($args, $this->getClient());
    }
    /**
     */
    public function password(): ResourceByProjectKeyInStoreKeyByStoreKeyMePassword
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyInStoreKeyByStoreKeyMePassword($args, $this->getClient());
    }
    /**
     */
    public function signup(): ResourceByProjectKeyInStoreKeyByStoreKeyMeSignup
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyInStoreKeyByStoreKeyMeSignup($args, $this->getClient());
    }
    /**
     */
    public function login(): ResourceByProjectKeyInStoreKeyByStoreKeyMeLogin
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyInStoreKeyByStoreKeyMeLogin($args, $this->getClient());
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyMeGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyMeGet($args['projectKey'], $args['storeKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?MyCustomerUpdate $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?MyCustomerUpdate $body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyMePost
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyMePost($args['projectKey'], $args['storeKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function delete($body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyMeDelete
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyMeDelete($args['projectKey'], $args['storeKey'], $body, $headers, $this->getClient());
    }
}
