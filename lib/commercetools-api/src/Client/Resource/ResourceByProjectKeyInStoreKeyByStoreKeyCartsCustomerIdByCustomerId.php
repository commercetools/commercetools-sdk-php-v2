<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyInStoreKeyByStoreKeyCartsCustomerIdByCustomerId extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/in-store/key={storeKey}/carts/customer-id={customerId}', $args, $client);
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyCartsCustomerIdByCustomerIdGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyCartsCustomerIdByCustomerIdGet($args['projectKey'], $args['storeKey'], $args['customerId'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function head($body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyCartsCustomerIdByCustomerIdHead
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyCartsCustomerIdByCustomerIdHead($args['projectKey'], $args['storeKey'], $args['customerId'], $body, $headers, $this->getClient());
    }
}
