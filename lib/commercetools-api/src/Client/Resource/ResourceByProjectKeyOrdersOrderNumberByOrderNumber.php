<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Order\OrderUpdate;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyOrdersOrderNumberByOrderNumber extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/orders/order-number={orderNumber}', $args, $client);
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyOrdersOrderNumberByOrderNumberGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyOrdersOrderNumberByOrderNumberGet($args['projectKey'], $args['orderNumber'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?OrderUpdate $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?OrderUpdate $body = null, array $headers = []): ByProjectKeyOrdersOrderNumberByOrderNumberPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyOrdersOrderNumberByOrderNumberPost($args['projectKey'], $args['orderNumber'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function delete($body = null, array $headers = []): ByProjectKeyOrdersOrderNumberByOrderNumberDelete
    {
        $args = $this->getArgs();

        return new ByProjectKeyOrdersOrderNumberByOrderNumberDelete($args['projectKey'], $args['orderNumber'], $body, $headers, $this->getClient());
    }
}
