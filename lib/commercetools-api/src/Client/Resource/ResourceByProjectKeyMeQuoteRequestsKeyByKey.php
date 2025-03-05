<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Me\MyQuoteRequestUpdate;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyMeQuoteRequestsKeyByKey extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ?ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/me/quote-requests/key={key}', $args, $client);
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyMeQuoteRequestsKeyByKeyGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyMeQuoteRequestsKeyByKeyGet($args['projectKey'], $args['key'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function head($body = null, array $headers = []): ByProjectKeyMeQuoteRequestsKeyByKeyHead
    {
        $args = $this->getArgs();

        return new ByProjectKeyMeQuoteRequestsKeyByKeyHead($args['projectKey'], $args['key'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?MyQuoteRequestUpdate $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?MyQuoteRequestUpdate $body = null, array $headers = []): ByProjectKeyMeQuoteRequestsKeyByKeyPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyMeQuoteRequestsKeyByKeyPost($args['projectKey'], $args['key'], $body, $headers, $this->getClient());
    }
}
