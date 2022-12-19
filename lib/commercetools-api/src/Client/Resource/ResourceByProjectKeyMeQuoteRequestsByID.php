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
class ResourceByProjectKeyMeQuoteRequestsByID extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/me/quote-requests/{ID}', $args, $client);
    }

    /**
     * @psalm-param ?MyQuoteRequestUpdate $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?MyQuoteRequestUpdate $body = null, array $headers = []): ByProjectKeyMeQuoteRequestsByIDPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyMeQuoteRequestsByIDPost($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function delete($body = null, array $headers = []): ByProjectKeyMeQuoteRequestsByIDDelete
    {
        $args = $this->getArgs();

        return new ByProjectKeyMeQuoteRequestsByIDDelete($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyMeQuoteRequestsByIDGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyMeQuoteRequestsByIDGet($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
}
