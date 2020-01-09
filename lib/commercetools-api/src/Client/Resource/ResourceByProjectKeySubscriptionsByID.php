<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Subscription\SubscriptionUpdate;
use Commercetools\Client\ApiResource;

/** @psalm-suppress PropertyNotSetInConstructor */
class ResourceByProjectKeySubscriptionsByID extends ApiResource
{
    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     *
     * @param null|mixed $body
     */
    public function get($body = null, array $headers = []): ByProjectKeySubscriptionsByIDGet
    {
        $args = $this->getArgs();

        return new ByProjectKeySubscriptionsByIDGet((string) $args['projectKey'], (string) $args['ID'], $body, $headers, $this->getClient());
    }

    /**
     * @psalm-param ?SubscriptionUpdate $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?SubscriptionUpdate $body = null, array $headers = []): ByProjectKeySubscriptionsByIDPost
    {
        $args = $this->getArgs();

        return new ByProjectKeySubscriptionsByIDPost((string) $args['projectKey'], (string) $args['ID'], $body, $headers, $this->getClient());
    }

    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     *
     * @param null|mixed $body
     */
    public function delete($body = null, array $headers = []): ByProjectKeySubscriptionsByIDDelete
    {
        $args = $this->getArgs();

        return new ByProjectKeySubscriptionsByIDDelete((string) $args['projectKey'], (string) $args['ID'], $body, $headers, $this->getClient());
    }
}
