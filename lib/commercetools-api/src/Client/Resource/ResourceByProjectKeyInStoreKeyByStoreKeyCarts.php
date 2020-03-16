<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Cart\CartDraft;
use Commercetools\Client\ApiResource;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyInStoreKeyByStoreKeyCarts extends ApiResource
{
    public function withCustomerId(string $customerId = null): ResourceByProjectKeyInStoreKeyByStoreKeyCartsCustomerIdByCustomerId
    {
        $args = $this->getArgs();
        if (!is_null($customerId)) {
            $args['customerId'] = $customerId;
        }

        return new ResourceByProjectKeyInStoreKeyByStoreKeyCartsCustomerIdByCustomerId($this->getUri() . '/customer-id={customerId}', $args, $this->getClient());
    }
    public function withId(string $ID = null): ResourceByProjectKeyInStoreKeyByStoreKeyCartsByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyInStoreKeyByStoreKeyCartsByID($this->getUri() . '/{ID}', $args, $this->getClient());
    }

    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyCartsGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyCartsGet((string) $args['projectKey'], (string) $args['storeKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?CartDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?CartDraft $body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyCartsPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyCartsPost((string) $args['projectKey'], (string) $args['storeKey'], $body, $headers, $this->getClient());
    }
}
