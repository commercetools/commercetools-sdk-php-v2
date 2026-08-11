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
class ResourceByProjectKeyInStoreKeyByStoreKeyVariantProjections extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ?ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/in-store/key={storeKey}/variant-projections', $args, $client);
    }

    /**
     */
    public function withKey(?string $key = null): ResourceByProjectKeyInStoreKeyByStoreKeyVariantProjectionsKeyByKey
    {
        $args = $this->getArgs();
        if (!is_null($key)) {
            $args['key'] = $key;
        }

        return new ResourceByProjectKeyInStoreKeyByStoreKeyVariantProjectionsKeyByKey($args, $this->getClient());
    }
    /**
     */
    public function withId(?string $ID = null): ResourceByProjectKeyInStoreKeyByStoreKeyVariantProjectionsByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyInStoreKeyByStoreKeyVariantProjectionsByID($args, $this->getClient());
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsGet($args['projectKey'], $args['storeKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function head($body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsHead
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsHead($args['projectKey'], $args['storeKey'], $body, $headers, $this->getClient());
    }
}
