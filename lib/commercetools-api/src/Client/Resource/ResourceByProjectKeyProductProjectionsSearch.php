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
class ResourceByProjectKeyProductProjectionsSearch extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/product-projections/search', $args, $client);
    }

    /**
     * @psalm-param ?string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?string $body = null, array $headers = []): ByProjectKeyProductProjectionsSearchPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyProductProjectionsSearchPost($args['projectKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyProductProjectionsSearchGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyProductProjectionsSearchGet($args['projectKey'], $body, $headers, $this->getClient());
    }
}
