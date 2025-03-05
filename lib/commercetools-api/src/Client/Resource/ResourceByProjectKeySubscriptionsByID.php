<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Subscription\SubscriptionUpdate;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeySubscriptionsByID extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ?ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/subscriptions/{ID}', $args, $client);
    }

    /**
     */
    public function withIdHealth(): ResourceByProjectKeySubscriptionsByIDHealth
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeySubscriptionsByIDHealth($args, $this->getClient());
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeySubscriptionsByIDGet
    {
        $args = $this->getArgs();

        return new ByProjectKeySubscriptionsByIDGet($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function head($body = null, array $headers = []): ByProjectKeySubscriptionsByIDHead
    {
        $args = $this->getArgs();

        return new ByProjectKeySubscriptionsByIDHead($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?SubscriptionUpdate $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?SubscriptionUpdate $body = null, array $headers = []): ByProjectKeySubscriptionsByIDPost
    {
        $args = $this->getArgs();

        return new ByProjectKeySubscriptionsByIDPost($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function delete($body = null, array $headers = []): ByProjectKeySubscriptionsByIDDelete
    {
        $args = $this->getArgs();

        return new ByProjectKeySubscriptionsByIDDelete($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
}
