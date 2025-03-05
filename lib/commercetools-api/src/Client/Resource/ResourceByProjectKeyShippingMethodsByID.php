<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\ShippingMethod\ShippingMethodUpdate;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyShippingMethodsByID extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ?ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/shipping-methods/{ID}', $args, $client);
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyShippingMethodsByIDGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyShippingMethodsByIDGet($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function head($body = null, array $headers = []): ByProjectKeyShippingMethodsByIDHead
    {
        $args = $this->getArgs();

        return new ByProjectKeyShippingMethodsByIDHead($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?ShippingMethodUpdate $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?ShippingMethodUpdate $body = null, array $headers = []): ByProjectKeyShippingMethodsByIDPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyShippingMethodsByIDPost($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function delete($body = null, array $headers = []): ByProjectKeyShippingMethodsByIDDelete
    {
        $args = $this->getArgs();

        return new ByProjectKeyShippingMethodsByIDDelete($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
}
