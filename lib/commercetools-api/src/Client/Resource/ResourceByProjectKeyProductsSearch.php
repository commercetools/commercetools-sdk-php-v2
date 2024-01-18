<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\ProductSearch\ProductSearchRequest;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyProductsSearch extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/products/search', $args, $client);
    }

    /**
     * @psalm-param ?ProductSearchRequest $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?ProductSearchRequest $body = null, array $headers = []): ByProjectKeyProductsSearchPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyProductsSearchPost($args['projectKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function head($body = null, array $headers = []): ByProjectKeyProductsSearchHead
    {
        $args = $this->getArgs();

        return new ByProjectKeyProductsSearchHead($args['projectKey'], $body, $headers, $this->getClient());
    }
}
