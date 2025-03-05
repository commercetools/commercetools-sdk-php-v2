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
class ResourceByProjectKeyQuoteRequestsByID extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ?ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/quote-requests/{ID}', $args, $client);
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyQuoteRequestsByIDGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyQuoteRequestsByIDGet($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function head($body = null, array $headers = []): ByProjectKeyQuoteRequestsByIDHead
    {
        $args = $this->getArgs();

        return new ByProjectKeyQuoteRequestsByIDHead($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?QuoteRequestUpdate $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?QuoteRequestUpdate $body = null, array $headers = []): ByProjectKeyQuoteRequestsByIDPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyQuoteRequestsByIDPost($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function delete($body = null, array $headers = []): ByProjectKeyQuoteRequestsByIDDelete
    {
        $args = $this->getArgs();

        return new ByProjectKeyQuoteRequestsByIDDelete($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
}
