<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Me\MyShoppingListDraft;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyInStoreKeyByStoreKeyMeShoppingLists extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ?ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/in-store/key={storeKey}/me/shopping-lists', $args, $client);
    }

    /**
     */
    public function withKey(?string $key = null): ResourceByProjectKeyInStoreKeyByStoreKeyMeShoppingListsKeyByKey
    {
        $args = $this->getArgs();
        if (!is_null($key)) {
            $args['key'] = $key;
        }

        return new ResourceByProjectKeyInStoreKeyByStoreKeyMeShoppingListsKeyByKey($args, $this->getClient());
    }
    /**
     */
    public function withId(?string $ID = null): ResourceByProjectKeyInStoreKeyByStoreKeyMeShoppingListsByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyInStoreKeyByStoreKeyMeShoppingListsByID($args, $this->getClient());
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsGet($args['projectKey'], $args['storeKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function head($body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsHead
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsHead($args['projectKey'], $args['storeKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?MyShoppingListDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?MyShoppingListDraft $body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsPost($args['projectKey'], $args['storeKey'], $body, $headers, $this->getClient());
    }
}
