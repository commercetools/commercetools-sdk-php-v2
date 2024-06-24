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
class ResourceByProjectKeyInStoreKeyByStoreKeyQuotes extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/in-store/key={storeKey}/quotes', $args, $client);
    }

    /**
     */
    public function withKey(string $key = null): ResourceByProjectKeyInStoreKeyByStoreKeyQuotesKeyByKey
    {
        $args = $this->getArgs();
        if (!is_null($key)) {
            $args['key'] = $key;
        }

        return new ResourceByProjectKeyInStoreKeyByStoreKeyQuotesKeyByKey($args, $this->getClient());
    }
    /**
     */
    public function withId(string $ID = null): ResourceByProjectKeyInStoreKeyByStoreKeyQuotesByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyInStoreKeyByStoreKeyQuotesByID($args, $this->getClient());
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyQuotesGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyQuotesGet($args['projectKey'], $args['storeKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function head($body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyQuotesHead
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyQuotesHead($args['projectKey'], $args['storeKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?QuoteDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?QuoteDraft $body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyQuotesPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyQuotesPost($args['projectKey'], $args['storeKey'], $body, $headers, $this->getClient());
    }
}
