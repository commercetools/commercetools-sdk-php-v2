<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\RecurrencePolicy\RecurrencePolicyDraft;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyRecurrencePolicies extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ?ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/recurrence-policies', $args, $client);
    }

    /**
     */
    public function withKey(?string $key = null): ResourceByProjectKeyRecurrencePoliciesKeyByKey
    {
        $args = $this->getArgs();
        if (!is_null($key)) {
            $args['key'] = $key;
        }

        return new ResourceByProjectKeyRecurrencePoliciesKeyByKey($args, $this->getClient());
    }
    /**
     */
    public function withId(?string $ID = null): ResourceByProjectKeyRecurrencePoliciesByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyRecurrencePoliciesByID($args, $this->getClient());
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyRecurrencePoliciesGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyRecurrencePoliciesGet($args['projectKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function head($body = null, array $headers = []): ByProjectKeyRecurrencePoliciesHead
    {
        $args = $this->getArgs();

        return new ByProjectKeyRecurrencePoliciesHead($args['projectKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?RecurrencePolicyDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?RecurrencePolicyDraft $body = null, array $headers = []): ByProjectKeyRecurrencePoliciesPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyRecurrencePoliciesPost($args['projectKey'], $body, $headers, $this->getClient());
    }
}
