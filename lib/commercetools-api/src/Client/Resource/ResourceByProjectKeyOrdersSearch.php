<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Order\OrderSearchRequest;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyOrdersSearch extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ?ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/orders/search', $args, $client);
    }

    /**
     * @psalm-param ?OrderSearchRequest $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?OrderSearchRequest $body = null, array $headers = []): ByProjectKeyOrdersSearchPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyOrdersSearchPost($args['projectKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function head($body = null, array $headers = []): ByProjectKeyOrdersSearchHead
    {
        $args = $this->getArgs();

        return new ByProjectKeyOrdersSearchHead($args['projectKey'], $body, $headers, $this->getClient());
    }
}
