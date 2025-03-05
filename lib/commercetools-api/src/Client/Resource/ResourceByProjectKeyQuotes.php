<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Quote\QuoteDraft;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyQuotes extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ?ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/quotes', $args, $client);
    }

    /**
     */
    public function withKey(?string $key = null): ResourceByProjectKeyQuotesKeyByKey
    {
        $args = $this->getArgs();
        if (!is_null($key)) {
            $args['key'] = $key;
        }

        return new ResourceByProjectKeyQuotesKeyByKey($args, $this->getClient());
    }
    /**
     */
    public function withId(?string $ID = null): ResourceByProjectKeyQuotesByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyQuotesByID($args, $this->getClient());
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyQuotesGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyQuotesGet($args['projectKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function head($body = null, array $headers = []): ByProjectKeyQuotesHead
    {
        $args = $this->getArgs();

        return new ByProjectKeyQuotesHead($args['projectKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?QuoteDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?QuoteDraft $body = null, array $headers = []): ByProjectKeyQuotesPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyQuotesPost($args['projectKey'], $body, $headers, $this->getClient());
    }
}
