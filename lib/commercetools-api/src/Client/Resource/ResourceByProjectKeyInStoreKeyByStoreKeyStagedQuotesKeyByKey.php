<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\StagedQuote\StagedQuoteUpdate;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyInStoreKeyByStoreKeyStagedQuotesKeyByKey extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ?ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/in-store/key={storeKey}/staged-quotes/key={key}', $args, $client);
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyStagedQuotesKeyByKeyGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyStagedQuotesKeyByKeyGet($args['projectKey'], $args['storeKey'], $args['key'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function head($body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyStagedQuotesKeyByKeyHead
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyStagedQuotesKeyByKeyHead($args['projectKey'], $args['storeKey'], $args['key'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?StagedQuoteUpdate $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?StagedQuoteUpdate $body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyStagedQuotesKeyByKeyPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyStagedQuotesKeyByKeyPost($args['projectKey'], $args['storeKey'], $args['key'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function delete($body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyStagedQuotesKeyByKeyDelete
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyStagedQuotesKeyByKeyDelete($args['projectKey'], $args['storeKey'], $args['key'], $body, $headers, $this->getClient());
    }
}
