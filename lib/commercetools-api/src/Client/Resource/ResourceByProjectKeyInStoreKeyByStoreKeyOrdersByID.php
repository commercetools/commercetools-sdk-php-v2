<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Order\OrderUpdate;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyInStoreKeyByStoreKeyOrdersByID extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/in-store/key={storeKey}/orders/{ID}', $args, $client);
    }

    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyOrdersByIDGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyOrdersByIDGet($args['projectKey'], $args['storeKey'], $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?OrderUpdate $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?OrderUpdate $body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyOrdersByIDPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyOrdersByIDPost($args['projectKey'], $args['storeKey'], $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function delete($body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyOrdersByIDDelete
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyOrdersByIDDelete($args['projectKey'], $args['storeKey'], $args['ID'], $body, $headers, $this->getClient());
    }
}
