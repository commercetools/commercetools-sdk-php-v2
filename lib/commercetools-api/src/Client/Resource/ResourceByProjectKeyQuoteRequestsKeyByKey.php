<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\QuoteRequest\QuoteRequestUpdate;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyQuoteRequestsKeyByKey extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/quote-requests/key={key}', $args, $client);
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyQuoteRequestsKeyByKeyGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyQuoteRequestsKeyByKeyGet($args['projectKey'], $args['key'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function head($body = null, array $headers = []): ByProjectKeyQuoteRequestsKeyByKeyHead
    {
        $args = $this->getArgs();

        return new ByProjectKeyQuoteRequestsKeyByKeyHead($args['projectKey'], $args['key'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?QuoteRequestUpdate $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?QuoteRequestUpdate $body = null, array $headers = []): ByProjectKeyQuoteRequestsKeyByKeyPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyQuoteRequestsKeyByKeyPost($args['projectKey'], $args['key'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function delete($body = null, array $headers = []): ByProjectKeyQuoteRequestsKeyByKeyDelete
    {
        $args = $this->getArgs();

        return new ByProjectKeyQuoteRequestsKeyByKeyDelete($args['projectKey'], $args['key'], $body, $headers, $this->getClient());
    }
}
