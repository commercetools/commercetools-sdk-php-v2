<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Cart\MergeCartDraft;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyInStoreKeyByStoreKeyCartsCustomerIdByCustomerIdMerge extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ?ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/in-store/key={storeKey}/carts/customer-id={customerId}/merge', $args, $client);
    }

    /**
     * @psalm-param ?MergeCartDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?MergeCartDraft $body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyCartsCustomerIdByCustomerIdMergePost
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyCartsCustomerIdByCustomerIdMergePost($args['projectKey'], $args['storeKey'], $args['customerId'], $body, $headers, $this->getClient());
    }
}
