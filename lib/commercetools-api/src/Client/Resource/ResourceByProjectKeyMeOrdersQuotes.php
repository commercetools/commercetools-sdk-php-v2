<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Me\MyOrderFromQuoteDraft;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyMeOrdersQuotes extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/me/orders/quotes', $args, $client);
    }

    /**
     * @psalm-param ?MyOrderFromQuoteDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?MyOrderFromQuoteDraft $body = null, array $headers = []): ByProjectKeyMeOrdersQuotesPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyMeOrdersQuotesPost($args['projectKey'], $body, $headers, $this->getClient());
    }
}
