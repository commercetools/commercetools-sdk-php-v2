<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Customer\CustomerUpdate;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyInStoreKeyByStoreKeyCustomersByID extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/in-store/key={storeKey}/customers/{ID}', $args, $client);
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyCustomersByIDGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyCustomersByIDGet($args['projectKey'], $args['storeKey'], $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function head($body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyCustomersByIDHead
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyCustomersByIDHead($args['projectKey'], $args['storeKey'], $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?CustomerUpdate $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?CustomerUpdate $body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyCustomersByIDPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyCustomersByIDPost($args['projectKey'], $args['storeKey'], $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function delete($body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyCustomersByIDDelete
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyCustomersByIDDelete($args['projectKey'], $args['storeKey'], $args['ID'], $body, $headers, $this->getClient());
    }
}
