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
class ResourceByProjectKeyMeShoppingLists extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/me/shopping-lists', $args, $client);
    }

    public function withId(string $ID = null): ResourceByProjectKeyMeShoppingListsByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyMeShoppingListsByID($args, $this->getClient());
    }
    public function keyWithKeyValue(string $key = null): ResourceByProjectKeyMeShoppingListsKeyByKey
    {
        $args = $this->getArgs();
        if (!is_null($key)) {
            $args['key'] = $key;
        }

        return new ResourceByProjectKeyMeShoppingListsKeyByKey($args, $this->getClient());
    }

    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
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
