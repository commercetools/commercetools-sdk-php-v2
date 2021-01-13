<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Cart\CartDraft;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyInStoreKeyByStoreKeyCarts extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/in-store/key={storeKey}/carts', $args, $client);
    }

    public function withCustomerId(string $customerId = null): ResourceByProjectKeyInStoreKeyByStoreKeyCartsCustomerIdByCustomerId
    {
        $args = $this->getArgs();
        if (!is_null($customerId)) {
            $args['customerId'] = $customerId;
        }

        return new ResourceByProjectKeyInStoreKeyByStoreKeyCartsCustomerIdByCustomerId($args, $this->getClient());
    }
    public function replicate(): ResourceByProjectKeyInStoreKeyByStoreKeyCartsReplicate
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyInStoreKeyByStoreKeyCartsReplicate($args, $this->getClient());
    }
    public function withId(string $ID = null): ResourceByProjectKeyInStoreKeyByStoreKeyCartsByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyInStoreKeyByStoreKeyCartsByID($args, $this->getClient());
    }

    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyCartsGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyCartsGet($args['projectKey'], $args['storeKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?CartDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?CartDraft $body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyCartsPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyCartsPost($args['projectKey'], $args['storeKey'], $body, $headers, $this->getClient());
    }
}
