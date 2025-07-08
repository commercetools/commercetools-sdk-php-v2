<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\RecurringOrder\RecurringOrderUpdate;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyRecurringOrdersByID extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ?ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/recurring-orders/{ID}', $args, $client);
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyRecurringOrdersByIDGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyRecurringOrdersByIDGet($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function head($body = null, array $headers = []): ByProjectKeyRecurringOrdersByIDHead
    {
        $args = $this->getArgs();

        return new ByProjectKeyRecurringOrdersByIDHead($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?RecurringOrderUpdate $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?RecurringOrderUpdate $body = null, array $headers = []): ByProjectKeyRecurringOrdersByIDPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyRecurringOrdersByIDPost($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
}
