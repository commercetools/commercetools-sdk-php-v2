<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Customer\CustomerUpdate;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyCustomersByID extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/customers/{ID}', $args, $client);
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyCustomersByIDGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyCustomersByIDGet($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function head($body = null, array $headers = []): ByProjectKeyCustomersByIDHead
    {
        $args = $this->getArgs();

        return new ByProjectKeyCustomersByIDHead($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?CustomerUpdate $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?CustomerUpdate $body = null, array $headers = []): ByProjectKeyCustomersByIDPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyCustomersByIDPost($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function delete($body = null, array $headers = []): ByProjectKeyCustomersByIDDelete
    {
        $args = $this->getArgs();

        return new ByProjectKeyCustomersByIDDelete($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
}
