<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\StagedQuote\StagedQuoteDraft;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyStagedQuotes extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ?ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/staged-quotes', $args, $client);
    }

    /**
     */
    public function withKey(?string $key = null): ResourceByProjectKeyStagedQuotesKeyByKey
    {
        $args = $this->getArgs();
        if (!is_null($key)) {
            $args['key'] = $key;
        }

        return new ResourceByProjectKeyStagedQuotesKeyByKey($args, $this->getClient());
    }
    /**
     */
    public function withId(?string $ID = null): ResourceByProjectKeyStagedQuotesByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyStagedQuotesByID($args, $this->getClient());
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyStagedQuotesGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyStagedQuotesGet($args['projectKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function head($body = null, array $headers = []): ByProjectKeyStagedQuotesHead
    {
        $args = $this->getArgs();

        return new ByProjectKeyStagedQuotesHead($args['projectKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?StagedQuoteDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?StagedQuoteDraft $body = null, array $headers = []): ByProjectKeyStagedQuotesPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyStagedQuotesPost($args['projectKey'], $body, $headers, $this->getClient());
    }
}
