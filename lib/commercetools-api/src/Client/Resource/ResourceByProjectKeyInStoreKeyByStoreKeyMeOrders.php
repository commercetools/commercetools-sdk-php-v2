<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Me\MyOrderFromCartDraft;
use Commercetools\Client\ApiResource;

/** @psalm-suppress PropertyNotSetInConstructor */
class ResourceByProjectKeyInStoreKeyByStoreKeyMeOrders extends ApiResource
{
    public function withId(string $ID = null): ResourceByProjectKeyInStoreKeyByStoreKeyMeOrdersByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyInStoreKeyByStoreKeyMeOrdersByID($this->getUri().'/{ID}', $args, $this->getClient());
    }

    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     *
     * @param null|mixed $body
     */
    public function get($body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyMeOrdersGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyMeOrdersGet((string) $args['projectKey'], (string) $args['storeKey'], $body, $headers, $this->getClient());
    }

    /**
     * @psalm-param ?MyOrderFromCartDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?MyOrderFromCartDraft $body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyMeOrdersPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyMeOrdersPost((string) $args['projectKey'], (string) $args['storeKey'], $body, $headers, $this->getClient());
    }
}
