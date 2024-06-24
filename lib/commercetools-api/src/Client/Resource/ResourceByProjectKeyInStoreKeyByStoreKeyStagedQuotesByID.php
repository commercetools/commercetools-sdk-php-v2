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
class ResourceByProjectKeyInStoreKeyByStoreKeyStagedQuotesByID extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/in-store/key={storeKey}/staged-quotes/{ID}', $args, $client);
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyStagedQuotesByIDGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyStagedQuotesByIDGet($args['projectKey'], $args['storeKey'], $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function head($body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyStagedQuotesByIDHead
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyStagedQuotesByIDHead($args['projectKey'], $args['storeKey'], $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?StagedQuoteUpdate $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?StagedQuoteUpdate $body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyStagedQuotesByIDPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyStagedQuotesByIDPost($args['projectKey'], $args['storeKey'], $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function delete($body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyStagedQuotesByIDDelete
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyStagedQuotesByIDDelete($args['projectKey'], $args['storeKey'], $args['ID'], $body, $headers, $this->getClient());
    }
}
