<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\ShippingMethod\ShippingMethodDraft;
use Commercetools\Client\ApiResource;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 * @psalm-immutable
 */
class ResourceByProjectKeyShippingMethods extends ApiResource
{
    public function withKey(string $key = null): ResourceByProjectKeyShippingMethodsKeyByKey
    {
        $args = $this->getArgs();
        if (!is_null($key)) {
            $args['key'] = $key;
        }

        return new ResourceByProjectKeyShippingMethodsKeyByKey($this->getUri() . '/key={key}', $args, $this->getClient());
    }
    public function matchingCart(): ResourceByProjectKeyShippingMethodsMatchingCart
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyShippingMethodsMatchingCart($this->getUri() . '/matching-cart', $args, $this->getClient());
    }
    public function matchingOrderedit(): ResourceByProjectKeyShippingMethodsMatchingOrderedit
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyShippingMethodsMatchingOrderedit($this->getUri() . '/matching-orderedit', $args, $this->getClient());
    }
    public function matchingLocation(): ResourceByProjectKeyShippingMethodsMatchingLocation
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyShippingMethodsMatchingLocation($this->getUri() . '/matching-location', $args, $this->getClient());
    }
    public function withId(string $ID = null): ResourceByProjectKeyShippingMethodsByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyShippingMethodsByID($this->getUri() . '/{ID}', $args, $this->getClient());
    }

    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyShippingMethodsGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyShippingMethodsGet((string) $args['projectKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?ShippingMethodDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?ShippingMethodDraft $body = null, array $headers = []): ByProjectKeyShippingMethodsPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyShippingMethodsPost((string) $args['projectKey'], $body, $headers, $this->getClient());
    }
}
