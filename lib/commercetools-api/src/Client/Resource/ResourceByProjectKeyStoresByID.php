<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Store\StoreUpdate;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyStoresByID extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/stores/{ID}', $args, $client);
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyStoresByIDGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyStoresByIDGet($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?StoreUpdate $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?StoreUpdate$body = null, array $headers = []): ByProjectKeyStoresByIDPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyStoresByIDPost($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function delete($body = null, array $headers = []): ByProjectKeyStoresByIDDelete
    {
        $args = $this->getArgs();

        return new ByProjectKeyStoresByIDDelete($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
}
