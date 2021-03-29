<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Product\ProductDraft;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyProducts extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/products', $args, $client);
    }

    public function withKey(string $key = null): ResourceByProjectKeyProductsKeyByKey
    {
        $args = $this->getArgs();
        if (!is_null($key)) {
            $args['key'] = $key;
        }

        return new ResourceByProjectKeyProductsKeyByKey($args, $this->getClient());
    }
    public function withId(string $ID = null): ResourceByProjectKeyProductsByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyProductsByID($args, $this->getClient());
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
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
    public function post(?ProductDraft$body = null, array $headers = []): ByProjectKeyProductsPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyProductsPost($args['projectKey'], $body, $headers, $this->getClient());
    }
}
