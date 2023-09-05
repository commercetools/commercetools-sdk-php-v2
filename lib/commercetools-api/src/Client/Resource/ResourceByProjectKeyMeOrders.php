<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Me\MyOrderFromCartDraft;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyMeOrders extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/me/orders', $args, $client);
    }

    /**
     */
    public function withId(string $ID = null): ResourceByProjectKeyMeOrdersByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyMeOrdersByID($args, $this->getClient());
    }
    /**
     */
    public function orderQuote(): ResourceByProjectKeyMeOrdersQuotes
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyMeOrdersQuotes($args, $this->getClient());
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyMeOrdersGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyMeOrdersGet($args['projectKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?MyOrderFromCartDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?MyOrderFromCartDraft $body = null, array $headers = []): ByProjectKeyMeOrdersPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyMeOrdersPost($args['projectKey'], $body, $headers, $this->getClient());
    }
}
