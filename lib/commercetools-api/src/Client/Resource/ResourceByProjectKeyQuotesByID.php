<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Quote\QuoteUpdate;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyQuotesByID extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/quotes/{ID}', $args, $client);
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyQuotesByIDGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyQuotesByIDGet($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function head($body = null, array $headers = []): ByProjectKeyQuotesByIDHead
    {
        $args = $this->getArgs();

        return new ByProjectKeyQuotesByIDHead($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?QuoteUpdate $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?QuoteUpdate $body = null, array $headers = []): ByProjectKeyQuotesByIDPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyQuotesByIDPost($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function delete($body = null, array $headers = []): ByProjectKeyQuotesByIDDelete
    {
        $args = $this->getArgs();

        return new ByProjectKeyQuotesByIDDelete($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
}
