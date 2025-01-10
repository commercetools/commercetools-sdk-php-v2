<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\BusinessUnit\BusinessUnitDraft;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyInStoreKeyByStoreKeyBusinessUnits extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/in-store/key={storeKey}/business-units', $args, $client);
    }

    /**
     */
    public function withKey(string $key = null): ResourceByProjectKeyInStoreKeyByStoreKeyBusinessUnitsKeyByKey
    {
        $args = $this->getArgs();
        if (!is_null($key)) {
            $args['key'] = $key;
        }

        return new ResourceByProjectKeyInStoreKeyByStoreKeyBusinessUnitsKeyByKey($args, $this->getClient());
    }
    /**
     */
    public function withId(string $ID = null): ResourceByProjectKeyInStoreKeyByStoreKeyBusinessUnitsByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyInStoreKeyByStoreKeyBusinessUnitsByID($args, $this->getClient());
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyBusinessUnitsGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyBusinessUnitsGet($args['projectKey'], $args['storeKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function head($body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyBusinessUnitsHead
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyBusinessUnitsHead($args['projectKey'], $args['storeKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?BusinessUnitDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?BusinessUnitDraft $body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyBusinessUnitsPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyBusinessUnitsPost($args['projectKey'], $args['storeKey'], $body, $headers, $this->getClient());
    }
}
