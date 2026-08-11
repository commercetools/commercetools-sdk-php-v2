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
class ResourceByProjectKeyInStoreKeyByStoreKeyVariantProjectionsKeyByKey extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ?ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/in-store/key={storeKey}/variant-projections/key={key}', $args, $client);
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsKeyByKeyGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsKeyByKeyGet($args['projectKey'], $args['storeKey'], $args['key'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function head($body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsKeyByKeyHead
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsKeyByKeyHead($args['projectKey'], $args['storeKey'], $args['key'], $body, $headers, $this->getClient());
    }
}
