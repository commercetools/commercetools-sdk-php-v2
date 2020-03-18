<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Cart\CartUpdate;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyInStoreKeyByStoreKeyCartsByID extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/in-store/key={storeKey}/carts/{ID}', $args, $client);
    }

    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyCartsByIDGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyCartsByIDGet($args['projectKey'], $args['storeKey'], $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?CartUpdate $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?CartUpdate $body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyCartsByIDPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyCartsByIDPost($args['projectKey'], $args['storeKey'], $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function delete($body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyCartsByIDDelete
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyCartsByIDDelete($args['projectKey'], $args['storeKey'], $args['ID'], $body, $headers, $this->getClient());
    }
}
