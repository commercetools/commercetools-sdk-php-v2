<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Me\MyShoppingListDraft;
use Commercetools\Client\ApiResource;

/** @psalm-suppress PropertyNotSetInConstructor */
class ResourceByProjectKeyMeShoppingLists extends ApiResource
{
    /**
     * @psalm-param scalar $ID
     *
     * @param null|mixed $ID
     */
    public function withId($ID = null): ResourceByProjectKeyMeShoppingListsByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyMeShoppingListsByID($this->getUri().'/{ID}', $args, $this->getClient());
    }

    /**
     * @psalm-param scalar $key
     *
     * @param null|mixed $key
     */
    public function keyWithKeyValue($key = null): ResourceByProjectKeyMeShoppingListsKeyByKey
    {
        $args = $this->getArgs();
        if (!is_null($key)) {
            $args['key'] = $key;
        }

        return new ResourceByProjectKeyMeShoppingListsKeyByKey($this->getUri().'/key={key}', $args, $this->getClient());
    }

    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     *
     * @param null|mixed $body
     */
    public function get($body = null, array $headers = []): ByProjectKeyMeShoppingListsGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyMeShoppingListsGet($args['projectKey'], $body, $headers, $this->getClient());
    }

    /**
     * @psalm-param ?MyShoppingListDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?MyShoppingListDraft $body = null, array $headers = []): ByProjectKeyMeShoppingListsPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyMeShoppingListsPost($args['projectKey'], $body, $headers, $this->getClient());
    }
}
