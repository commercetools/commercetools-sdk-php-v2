<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Product\ProductUpdate;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyProductsByID extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/products/{ID}', $args, $client);
    }

    /**
     */
    public function images(): ResourceByProjectKeyProductsByIDImages
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyProductsByIDImages($args, $this->getClient());
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyProductsByIDGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyProductsByIDGet($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?ProductUpdate $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?ProductUpdate $body = null, array $headers = []): ByProjectKeyProductsByIDPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyProductsByIDPost($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function delete($body = null, array $headers = []): ByProjectKeyProductsByIDDelete
    {
        $args = $this->getArgs();

        return new ByProjectKeyProductsByIDDelete($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
}
