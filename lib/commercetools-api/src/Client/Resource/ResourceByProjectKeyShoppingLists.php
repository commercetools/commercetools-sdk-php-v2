<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\ShoppingList\ShoppingListDraft;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyShoppingLists extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/shopping-lists', $args, $client);
    }

    public function withKey(string $key = null): ResourceByProjectKeyShoppingListsKeyByKey
    {
        $args = $this->getArgs();
        if (!is_null($key)) {
            $args['key'] = $key;
        }

        return new ResourceByProjectKeyShoppingListsKeyByKey($args, $this->getClient());
    }
    public function withId(string $ID = null): ResourceByProjectKeyShoppingListsByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyShoppingListsByID($args, $this->getClient());
    }

    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyShoppingListsGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyShoppingListsGet($args['projectKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?ShoppingListDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?ShoppingListDraft $body = null, array $headers = []): ByProjectKeyShoppingListsPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyShoppingListsPost($args['projectKey'], $body, $headers, $this->getClient());
    }
}
