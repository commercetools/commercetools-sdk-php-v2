<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Common\Update;
use Commercetools\Client\ApiResource;

/** @psalm-suppress PropertyNotSetInConstructor */
class ResourceByProjectKeyMeShoppingListsByID extends ApiResource
{
    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     *
     * @param null|mixed $body
     */
    public function get($body = null, array $headers = []): ByProjectKeyMeShoppingListsByIDGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyMeShoppingListsByIDGet($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }

    /**
     * @psalm-param ?Update $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?Update $body = null, array $headers = []): ByProjectKeyMeShoppingListsByIDPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyMeShoppingListsByIDPost($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }

    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     *
     * @param null|mixed $body
     */
    public function delete($body = null, array $headers = []): ByProjectKeyMeShoppingListsByIDDelete
    {
        $args = $this->getArgs();

        return new ByProjectKeyMeShoppingListsByIDDelete($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
}
