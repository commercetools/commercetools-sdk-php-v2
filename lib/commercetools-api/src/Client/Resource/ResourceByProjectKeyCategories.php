<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Category\CategoryDraft;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyCategories extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ?ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/categories', $args, $client);
    }

    /**
     */
    public function withKey(?string $key = null): ResourceByProjectKeyCategoriesKeyByKey
    {
        $args = $this->getArgs();
        if (!is_null($key)) {
            $args['key'] = $key;
        }

        return new ResourceByProjectKeyCategoriesKeyByKey($args, $this->getClient());
    }
    /**
     */
    public function withId(?string $ID = null): ResourceByProjectKeyCategoriesByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyCategoriesByID($args, $this->getClient());
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyCategoriesGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyCategoriesGet($args['projectKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function head($body = null, array $headers = []): ByProjectKeyCategoriesHead
    {
        $args = $this->getArgs();

        return new ByProjectKeyCategoriesHead($args['projectKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?CategoryDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?CategoryDraft $body = null, array $headers = []): ByProjectKeyCategoriesPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyCategoriesPost($args['projectKey'], $body, $headers, $this->getClient());
    }
}
