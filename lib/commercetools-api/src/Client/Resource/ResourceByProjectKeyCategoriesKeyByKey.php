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
class ResourceByProjectKeyCategoriesKeyByKey extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/categories/key={key}', $args, $client);
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyCategoriesKeyByKeyGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyCategoriesKeyByKeyGet($args['projectKey'], $args['key'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function head($body = null, array $headers = []): ByProjectKeyCategoriesKeyByKeyHead
    {
        $args = $this->getArgs();

        return new ByProjectKeyCategoriesKeyByKeyHead($args['projectKey'], $args['key'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?CategoryUpdate $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?CategoryUpdate $body = null, array $headers = []): ByProjectKeyCategoriesKeyByKeyPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyCategoriesKeyByKeyPost($args['projectKey'], $args['key'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function delete($body = null, array $headers = []): ByProjectKeyCategoriesKeyByKeyDelete
    {
        $args = $this->getArgs();

        return new ByProjectKeyCategoriesKeyByKeyDelete($args['projectKey'], $args['key'], $body, $headers, $this->getClient());
    }
}
