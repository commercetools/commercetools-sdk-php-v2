<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\ShippingMethod\ShippingMethodDraft;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyShippingMethods extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/shipping-methods', $args, $client);
    }

    /**
     */
    public function withKey(string $key = null): ResourceByProjectKeyShippingMethodsKeyByKey
    {
        $args = $this->getArgs();
        if (!is_null($key)) {
            $args['key'] = $key;
        }

        return new ResourceByProjectKeyShippingMethodsKeyByKey($args, $this->getClient());
    }
    /**
     */
    public function matchingCart(): ResourceByProjectKeyShippingMethodsMatchingCart
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyShippingMethodsMatchingCart($args, $this->getClient());
    }
    /**
     */
    public function matchingCartLocation(): ResourceByProjectKeyShippingMethodsMatchingCartLocation
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyShippingMethodsMatchingCartLocation($args, $this->getClient());
    }
    /**
     */
    public function matchingOrderedit(): ResourceByProjectKeyShippingMethodsMatchingOrderedit
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyShippingMethodsMatchingOrderedit($args, $this->getClient());
    }
    /**
     */
    public function matchingLocation(): ResourceByProjectKeyShippingMethodsMatchingLocation
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyShippingMethodsMatchingLocation($args, $this->getClient());
    }
    /**
     */
    public function withId(string $ID = null): ResourceByProjectKeyShippingMethodsByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyShippingMethodsByID($args, $this->getClient());
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyShippingMethodsGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyShippingMethodsGet($args['projectKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?ShippingMethodDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?ShippingMethodDraft $body = null, array $headers = []): ByProjectKeyShippingMethodsPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyShippingMethodsPost($args['projectKey'], $body, $headers, $this->getClient());
    }
}
