<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Store\StoreDraft;
use Commercetools\Client\ApiResource;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyStores extends ApiResource
{
    public function withKey(string $key = null): ResourceByProjectKeyStoresKeyByKey
    {
        $args = $this->getArgs();
        if (!is_null($key)) {
            $args['key'] = $key;
        }

        return new ResourceByProjectKeyStoresKeyByKey($this->getUri() . '/key={key}', $args, $this->getClient());
    }
    public function withId(string $ID = null): ResourceByProjectKeyStoresByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyStoresByID($this->getUri() . '/{ID}', $args, $this->getClient());
    }

    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyStoresGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyStoresGet((string) $args['projectKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?StoreDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?StoreDraft $body = null, array $headers = []): ByProjectKeyStoresPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyStoresPost((string) $args['projectKey'], $body, $headers, $this->getClient());
    }
}
