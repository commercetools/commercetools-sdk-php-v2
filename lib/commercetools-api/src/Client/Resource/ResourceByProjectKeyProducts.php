<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Product\ProductDraft;
use Commercetools\Client\ApiResource;

/** @psalm-suppress PropertyNotSetInConstructor */
class ResourceByProjectKeyProducts extends ApiResource
{
    /**
     * @psalm-param scalar $key
     *
     * @param null|mixed $key
     */
    public function withKey($key = null): ResourceByProjectKeyProductsKeyByKey
    {
        $args = $this->getArgs();
        if (!is_null($key)) {
            $args['key'] = $key;
        }

        return new ResourceByProjectKeyProductsKeyByKey($this->getUri().'/key={key}', $args, $this->getClient());
    }

    /**
     * @psalm-param scalar $ID
     *
     * @param null|mixed $ID
     */
    public function withId($ID = null): ResourceByProjectKeyProductsByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyProductsByID($this->getUri().'/{ID}', $args, $this->getClient());
    }

    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     *
     * @param null|mixed $body
     */
    public function get($body = null, array $headers = []): ByProjectKeyProductsGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyProductsGet($args['projectKey'], $body, $headers, $this->getClient());
    }

    /**
     * @psalm-param ?ProductDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?ProductDraft $body = null, array $headers = []): ByProjectKeyProductsPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyProductsPost($args['projectKey'], $body, $headers, $this->getClient());
    }
}
