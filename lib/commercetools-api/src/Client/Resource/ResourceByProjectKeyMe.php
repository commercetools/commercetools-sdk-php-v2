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
class ResourceByProjectKeyMe extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ?ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/me', $args, $client);
    }

    /**
     */
    public function emailConfirm(): ResourceByProjectKeyMeEmailConfirm
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyMeEmailConfirm($args, $this->getClient());
    }
    /**
     */
    public function password(): ResourceByProjectKeyMePassword
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyMePassword($args, $this->getClient());
    }
    /**
     */
    public function signup(): ResourceByProjectKeyMeSignup
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyMeSignup($args, $this->getClient());
    }
    /**
     */
    public function login(): ResourceByProjectKeyMeLogin
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyMeLogin($args, $this->getClient());
    }
    /**
     */
    public function activeCart(): ResourceByProjectKeyMeActiveCart
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyMeActiveCart($args, $this->getClient());
    }
    /**
     */
    public function businessUnits(): ResourceByProjectKeyMeBusinessUnits
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyMeBusinessUnits($args, $this->getClient());
    }
    /**
     */
    public function carts(): ResourceByProjectKeyMeCarts
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyMeCarts($args, $this->getClient());
    }
    /**
     */
    public function orders(): ResourceByProjectKeyMeOrders
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyMeOrders($args, $this->getClient());
    }
    /**
     */
    public function payments(): ResourceByProjectKeyMePayments
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyMePayments($args, $this->getClient());
    }
    /**
     */
    public function quoteRequests(): ResourceByProjectKeyMeQuoteRequests
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyMeQuoteRequests($args, $this->getClient());
    }
    /**
     */
    public function quotes(): ResourceByProjectKeyMeQuotes
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyMeQuotes($args, $this->getClient());
    }
    /**
     */
    public function shoppingLists(): ResourceByProjectKeyMeShoppingLists
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyMeShoppingLists($args, $this->getClient());
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyMeGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyMeGet($args['projectKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?MyCustomerUpdate $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?MyCustomerUpdate $body = null, array $headers = []): ByProjectKeyMePost
    {
        $args = $this->getArgs();

        return new ByProjectKeyMePost($args['projectKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function delete($body = null, array $headers = []): ByProjectKeyMeDelete
    {
        $args = $this->getArgs();

        return new ByProjectKeyMeDelete($args['projectKey'], $body, $headers, $this->getClient());
    }
}
