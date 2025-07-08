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
class ResourceByProjectKeyRecurrencePoliciesByID extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ?ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/recurrence-policies/{ID}', $args, $client);
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyRecurrencePoliciesByIDGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyRecurrencePoliciesByIDGet($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function head($body = null, array $headers = []): ByProjectKeyRecurrencePoliciesByIDHead
    {
        $args = $this->getArgs();

        return new ByProjectKeyRecurrencePoliciesByIDHead($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?RecurrencePolicyUpdate $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?RecurrencePolicyUpdate $body = null, array $headers = []): ByProjectKeyRecurrencePoliciesByIDPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyRecurrencePoliciesByIDPost($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
}
