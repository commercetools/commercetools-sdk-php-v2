<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Me\MyShoppingListUpdate;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyMeShoppingListsKeyByKey extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ?ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/me/shopping-lists/key={key}', $args, $client);
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyMeShoppingListsKeyByKeyGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyMeShoppingListsKeyByKeyGet($args['projectKey'], $args['key'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function head($body = null, array $headers = []): ByProjectKeyMeShoppingListsKeyByKeyHead
    {
        $args = $this->getArgs();

        return new ByProjectKeyMeShoppingListsKeyByKeyHead($args['projectKey'], $args['key'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?MyShoppingListUpdate $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?MyShoppingListUpdate $body = null, array $headers = []): ByProjectKeyMeShoppingListsKeyByKeyPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyMeShoppingListsKeyByKeyPost($args['projectKey'], $args['key'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function delete($body = null, array $headers = []): ByProjectKeyMeShoppingListsKeyByKeyDelete
    {
        $args = $this->getArgs();

        return new ByProjectKeyMeShoppingListsKeyByKeyDelete($args['projectKey'], $args['key'], $body, $headers, $this->getClient());
    }
}
