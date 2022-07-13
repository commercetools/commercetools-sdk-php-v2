<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\ProductType\ProductTypeDraft;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyProductTypes extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/product-types', $args, $client);
    }

    /**
     */
    public function withKey(string $key = null): ResourceByProjectKeyProductTypesKeyByKey
    {
        $args = $this->getArgs();
        if (!is_null($key)) {
            $args['key'] = $key;
        }

        return new ResourceByProjectKeyProductTypesKeyByKey($args, $this->getClient());
    }
    /**
     */
    public function withId(string $ID = null): ResourceByProjectKeyProductTypesByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyProductTypesByID($args, $this->getClient());
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyProductTypesGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyProductTypesGet($args['projectKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function head($body = null, array $headers = []): ByProjectKeyProductTypesHead
    {
        $args = $this->getArgs();

        return new ByProjectKeyProductTypesHead($args['projectKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?ProductTypeDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?ProductTypeDraft $body = null, array $headers = []): ByProjectKeyProductTypesPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyProductTypesPost($args['projectKey'], $body, $headers, $this->getClient());
    }
}
