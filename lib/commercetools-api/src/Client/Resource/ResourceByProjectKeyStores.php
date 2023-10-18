<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Store\StoreDraft;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyStores extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/stores', $args, $client);
    }

    /**
     */
    public function withKey(string $key = null): ResourceByProjectKeyStoresKeyByKey
    {
        $args = $this->getArgs();
        if (!is_null($key)) {
            $args['key'] = $key;
        }

        return new ResourceByProjectKeyStoresKeyByKey($args, $this->getClient());
    }
    /**
     */
    public function withId(string $ID = null): ResourceByProjectKeyStoresByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyStoresByID($args, $this->getClient());
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyStoresGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyStoresGet($args['projectKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function head($body = null, array $headers = []): ByProjectKeyStoresHead
    {
        $args = $this->getArgs();

        return new ByProjectKeyStoresHead($args['projectKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?StoreDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?StoreDraft $body = null, array $headers = []): ByProjectKeyStoresPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyStoresPost($args['projectKey'], $body, $headers, $this->getClient());
    }
}
