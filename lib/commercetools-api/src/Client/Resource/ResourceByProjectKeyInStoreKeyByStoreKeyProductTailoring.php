<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\ProductTailoring\ProductTailoringInStoreDraft;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyInStoreKeyByStoreKeyProductTailoring extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ?ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/in-store/key={storeKey}/product-tailoring', $args, $client);
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyProductTailoringGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyProductTailoringGet($args['projectKey'], $args['storeKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?ProductTailoringInStoreDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?ProductTailoringInStoreDraft $body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyProductTailoringPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyProductTailoringPost($args['projectKey'], $args['storeKey'], $body, $headers, $this->getClient());
    }
}
