<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Me\MyQuoteRequestDraft;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyMeQuoteRequests extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/me/quote-requests', $args, $client);
    }

    /**
     */
    public function withId(string $ID = null): ResourceByProjectKeyMeQuoteRequestsByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyMeQuoteRequestsByID($args, $this->getClient());
    }
    /**
     */
    public function withKey(string $key = null): ResourceByProjectKeyMeQuoteRequestsKeyByKey
    {
        $args = $this->getArgs();
        if (!is_null($key)) {
            $args['key'] = $key;
        }

        return new ResourceByProjectKeyMeQuoteRequestsKeyByKey($args, $this->getClient());
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyMeQuoteRequestsGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyMeQuoteRequestsGet($args['projectKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?MyQuoteRequestDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?MyQuoteRequestDraft $body = null, array $headers = []): ByProjectKeyMeQuoteRequestsPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyMeQuoteRequestsPost($args['projectKey'], $body, $headers, $this->getClient());
    }
}
