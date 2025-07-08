<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\RecurringOrder\RecurringOrderDraft;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyRecurringOrders extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ?ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/recurring-orders', $args, $client);
    }

    /**
     */
    public function withId(?string $ID = null): ResourceByProjectKeyRecurringOrdersByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyRecurringOrdersByID($args, $this->getClient());
    }
    /**
     */
    public function withKey(?string $key = null): ResourceByProjectKeyRecurringOrdersKeyByKey
    {
        $args = $this->getArgs();
        if (!is_null($key)) {
            $args['key'] = $key;
        }

        return new ResourceByProjectKeyRecurringOrdersKeyByKey($args, $this->getClient());
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyRecurringOrdersGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyRecurringOrdersGet($args['projectKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function head($body = null, array $headers = []): ByProjectKeyRecurringOrdersHead
    {
        $args = $this->getArgs();

        return new ByProjectKeyRecurringOrdersHead($args['projectKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?RecurringOrderDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?RecurringOrderDraft $body = null, array $headers = []): ByProjectKeyRecurringOrdersPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyRecurringOrdersPost($args['projectKey'], $body, $headers, $this->getClient());
    }
}
