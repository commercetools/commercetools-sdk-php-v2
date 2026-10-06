<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Category\CategoryUpdate;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyInStoreKeyByStoreKeyCategoriesKeyByKey extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ?ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/in-store/key={storeKey}/categories/key={key}', $args, $client);
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyCategoriesKeyByKeyGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyCategoriesKeyByKeyGet($args['projectKey'], $args['storeKey'], $args['key'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function head($body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyCategoriesKeyByKeyHead
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyCategoriesKeyByKeyHead($args['projectKey'], $args['storeKey'], $args['key'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?CategoryUpdate $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?CategoryUpdate $body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyCategoriesKeyByKeyPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyCategoriesKeyByKeyPost($args['projectKey'], $args['storeKey'], $args['key'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function delete($body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyCategoriesKeyByKeyDelete
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyCategoriesKeyByKeyDelete($args['projectKey'], $args['storeKey'], $args['key'], $body, $headers, $this->getClient());
    }
}
