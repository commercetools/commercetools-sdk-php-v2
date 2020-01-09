<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Category\CategoryDraft;
use Commercetools\Client\ApiResource;

/** @psalm-suppress PropertyNotSetInConstructor */
class ResourceByProjectKeyCategories extends ApiResource
{
    public function withKey(string $key = null): ResourceByProjectKeyCategoriesKeyByKey
    {
        $args = $this->getArgs();
        if (!is_null($key)) {
            $args['key'] = $key;
        }

        return new ResourceByProjectKeyCategoriesKeyByKey($this->getUri().'/key={key}', $args, $this->getClient());
    }

    public function withId(string $ID = null): ResourceByProjectKeyCategoriesByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyCategoriesByID($this->getUri().'/{ID}', $args, $this->getClient());
    }

    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     *
     * @param null|mixed $body
     */
    public function get($body = null, array $headers = []): ByProjectKeyCategoriesGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyCategoriesGet((string) $args['projectKey'], $body, $headers, $this->getClient());
    }

    /**
     * @psalm-param ?CategoryDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?CategoryDraft $body = null, array $headers = []): ByProjectKeyCategoriesPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyCategoriesPost((string) $args['projectKey'], $body, $headers, $this->getClient());
    }
}
