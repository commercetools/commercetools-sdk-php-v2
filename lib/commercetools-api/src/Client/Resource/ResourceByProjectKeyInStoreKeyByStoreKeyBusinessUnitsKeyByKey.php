<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\BusinessUnit\BusinessUnitUpdate;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyInStoreKeyByStoreKeyBusinessUnitsKeyByKey extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/in-store/key={storeKey}/business-units/key={key}', $args, $client);
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyBusinessUnitsKeyByKeyGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyBusinessUnitsKeyByKeyGet($args['projectKey'], $args['storeKey'], $args['key'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function head($body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyBusinessUnitsKeyByKeyHead
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyBusinessUnitsKeyByKeyHead($args['projectKey'], $args['storeKey'], $args['key'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?BusinessUnitUpdate $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?BusinessUnitUpdate $body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyBusinessUnitsKeyByKeyPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyBusinessUnitsKeyByKeyPost($args['projectKey'], $args['storeKey'], $args['key'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function delete($body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyBusinessUnitsKeyByKeyDelete
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyBusinessUnitsKeyByKeyDelete($args['projectKey'], $args['storeKey'], $args['key'], $body, $headers, $this->getClient());
    }
}
