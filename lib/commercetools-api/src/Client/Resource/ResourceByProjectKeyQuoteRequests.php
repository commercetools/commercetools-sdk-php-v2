<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\QuoteRequest\QuoteRequestDraft;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyQuoteRequests extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ?ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/quote-requests', $args, $client);
    }

    /**
     */
    public function withKey(?string $key = null): ResourceByProjectKeyQuoteRequestsKeyByKey
    {
        $args = $this->getArgs();
        if (!is_null($key)) {
            $args['key'] = $key;
        }

        return new ResourceByProjectKeyQuoteRequestsKeyByKey($args, $this->getClient());
    }
    /**
     */
    public function withId(?string $ID = null): ResourceByProjectKeyQuoteRequestsByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyQuoteRequestsByID($args, $this->getClient());
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyQuoteRequestsGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyQuoteRequestsGet($args['projectKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function head($body = null, array $headers = []): ByProjectKeyQuoteRequestsHead
    {
        $args = $this->getArgs();

        return new ByProjectKeyQuoteRequestsHead($args['projectKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?QuoteRequestDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?QuoteRequestDraft $body = null, array $headers = []): ByProjectKeyQuoteRequestsPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyQuoteRequestsPost($args['projectKey'], $body, $headers, $this->getClient());
    }
}
