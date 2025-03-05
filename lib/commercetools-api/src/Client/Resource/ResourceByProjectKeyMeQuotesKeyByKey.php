<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Me\MyQuoteUpdate;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyMeQuotesKeyByKey extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ?ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/me/quotes/key={key}', $args, $client);
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyMeQuotesKeyByKeyGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyMeQuotesKeyByKeyGet($args['projectKey'], $args['key'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function head($body = null, array $headers = []): ByProjectKeyMeQuotesKeyByKeyHead
    {
        $args = $this->getArgs();

        return new ByProjectKeyMeQuotesKeyByKeyHead($args['projectKey'], $args['key'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?MyQuoteUpdate $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?MyQuoteUpdate $body = null, array $headers = []): ByProjectKeyMeQuotesKeyByKeyPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyMeQuotesKeyByKeyPost($args['projectKey'], $args['key'], $body, $headers, $this->getClient());
    }
}
