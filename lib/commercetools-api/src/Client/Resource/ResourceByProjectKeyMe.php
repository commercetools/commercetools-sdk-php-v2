<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Common\Update;
use Commercetools\Client\ApiResource;

/** @psalm-suppress PropertyNotSetInConstructor */
class ResourceByProjectKeyMe extends ApiResource
{
    public function email(): ResourceByProjectKeyMeEmail
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyMeEmail($this->getUri().'/email', $args, $this->getClient());
    }

    public function password(): ResourceByProjectKeyMePassword
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyMePassword($this->getUri().'/password', $args, $this->getClient());
    }

    public function signup(): ResourceByProjectKeyMeSignup
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyMeSignup($this->getUri().'/signup', $args, $this->getClient());
    }

    public function login(): ResourceByProjectKeyMeLogin
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyMeLogin($this->getUri().'/login', $args, $this->getClient());
    }

    public function activeCart(): ResourceByProjectKeyMeActiveCart
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyMeActiveCart($this->getUri().'/active-cart', $args, $this->getClient());
    }

    public function carts(): ResourceByProjectKeyMeCarts
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyMeCarts($this->getUri().'/carts', $args, $this->getClient());
    }

    public function orders(): ResourceByProjectKeyMeOrders
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyMeOrders($this->getUri().'/orders', $args, $this->getClient());
    }

    public function payments(): ResourceByProjectKeyMePayments
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyMePayments($this->getUri().'/payments', $args, $this->getClient());
    }

    public function shoppingLists(): ResourceByProjectKeyMeShoppingLists
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyMeShoppingLists($this->getUri().'/shopping-lists', $args, $this->getClient());
    }

    public function payment(): ResourceByProjectKeyMePayment
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyMePayment($this->getUri().'/payment', $args, $this->getClient());
    }

    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     *
     * @param null|mixed $body
     */
    public function get($body = null, array $headers = []): ByProjectKeyMeGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyMeGet((string) $args['projectKey'], $body, $headers, $this->getClient());
    }

    /**
     * @psalm-param ?Update $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?Update $body = null, array $headers = []): ByProjectKeyMePost
    {
        $args = $this->getArgs();

        return new ByProjectKeyMePost((string) $args['projectKey'], $body, $headers, $this->getClient());
    }

    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     *
     * @param null|mixed $body
     */
    public function delete($body = null, array $headers = []): ByProjectKeyMeDelete
    {
        $args = $this->getArgs();

        return new ByProjectKeyMeDelete((string) $args['projectKey'], $body, $headers, $this->getClient());
    }
}
