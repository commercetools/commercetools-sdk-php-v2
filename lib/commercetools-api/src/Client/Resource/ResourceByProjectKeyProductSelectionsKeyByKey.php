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
class ResourceByProjectKeyProductSelectionsKeyByKey extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/product-selections/key={key}', $args, $client);
    }

    /**
     */
    public function products(): ResourceByProjectKeyProductSelectionsKeyByKeyProducts
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyProductSelectionsKeyByKeyProducts($args, $this->getClient());
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyProductSelectionsKeyByKeyGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyProductSelectionsKeyByKeyGet($args['projectKey'], $args['key'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?ProductSelectionUpdate $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?ProductSelectionUpdate $body = null, array $headers = []): ByProjectKeyProductSelectionsKeyByKeyPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyProductSelectionsKeyByKeyPost($args['projectKey'], $args['key'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function delete($body = null, array $headers = []): ByProjectKeyProductSelectionsKeyByKeyDelete
    {
        $args = $this->getArgs();

        return new ByProjectKeyProductSelectionsKeyByKeyDelete($args['projectKey'], $args['key'], $body, $headers, $this->getClient());
    }
}
