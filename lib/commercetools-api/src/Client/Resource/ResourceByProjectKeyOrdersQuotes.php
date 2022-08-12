<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Order\OrderFromQuoteDraft;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyOrdersQuotes extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/orders/quotes', $args, $client);
    }

    /**
     * @psalm-param ?OrderFromQuoteDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?OrderFromQuoteDraft $body = null, array $headers = []): ByProjectKeyOrdersQuotesPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyOrdersQuotesPost($args['projectKey'], $body, $headers, $this->getClient());
    }
}
