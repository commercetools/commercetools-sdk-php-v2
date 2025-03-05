<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\ProductSelection\ProductSelectionUpdate;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyProductSelectionsByID extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ?ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/product-selections/{ID}', $args, $client);
    }

    /**
     */
    public function products(): ResourceByProjectKeyProductSelectionsByIDProducts
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyProductSelectionsByIDProducts($args, $this->getClient());
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyProductSelectionsByIDGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyProductSelectionsByIDGet($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function head($body = null, array $headers = []): ByProjectKeyProductSelectionsByIDHead
    {
        $args = $this->getArgs();

        return new ByProjectKeyProductSelectionsByIDHead($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?ProductSelectionUpdate $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?ProductSelectionUpdate $body = null, array $headers = []): ByProjectKeyProductSelectionsByIDPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyProductSelectionsByIDPost($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function delete($body = null, array $headers = []): ByProjectKeyProductSelectionsByIDDelete
    {
        $args = $this->getArgs();

        return new ByProjectKeyProductSelectionsByIDDelete($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
}
