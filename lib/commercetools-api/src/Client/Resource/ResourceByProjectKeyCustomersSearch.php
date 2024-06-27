<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\CustomerSearch\CustomerSearchRequest;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyCustomersSearch extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/customers/search', $args, $client);
    }

    /**
     * @psalm-param ?CustomerSearchRequest $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?CustomerSearchRequest $body = null, array $headers = []): ByProjectKeyCustomersSearchPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyCustomersSearchPost($args['projectKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function head($body = null, array $headers = []): ByProjectKeyCustomersSearchHead
    {
        $args = $this->getArgs();

        return new ByProjectKeyCustomersSearchHead($args['projectKey'], $body, $headers, $this->getClient());
    }
}
