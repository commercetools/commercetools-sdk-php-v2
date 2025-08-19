<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\RecurrencePolicy\RecurrencePolicyUpdate;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyRecurrencePoliciesKeyByKey extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ?ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/recurrence-policies/key={key}', $args, $client);
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyRecurrencePoliciesKeyByKeyGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyRecurrencePoliciesKeyByKeyGet($args['projectKey'], $args['key'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function head($body = null, array $headers = []): ByProjectKeyRecurrencePoliciesKeyByKeyHead
    {
        $args = $this->getArgs();

        return new ByProjectKeyRecurrencePoliciesKeyByKeyHead($args['projectKey'], $args['key'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?RecurrencePolicyUpdate $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?RecurrencePolicyUpdate $body = null, array $headers = []): ByProjectKeyRecurrencePoliciesKeyByKeyPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyRecurrencePoliciesKeyByKeyPost($args['projectKey'], $args['key'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function delete($body = null, array $headers = []): ByProjectKeyRecurrencePoliciesKeyByKeyDelete
    {
        $args = $this->getArgs();

        return new ByProjectKeyRecurrencePoliciesKeyByKeyDelete($args['projectKey'], $args['key'], $body, $headers, $this->getClient());
    }
}
