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
class ResourceByProjectKeyCartsCustomerIdByCustomerIdMerge extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ?ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/carts/customer-id={customerId}/merge', $args, $client);
    }

    /**
     * @psalm-param ?MergeCartDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?MergeCartDraft $body = null, array $headers = []): ByProjectKeyCartsCustomerIdByCustomerIdMergePost
    {
        $args = $this->getArgs();

        return new ByProjectKeyCartsCustomerIdByCustomerIdMergePost($args['projectKey'], $args['customerId'], $body, $headers, $this->getClient());
    }
}
