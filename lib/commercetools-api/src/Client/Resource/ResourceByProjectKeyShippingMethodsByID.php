<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Client\ApiResource;
use Psr\Http\Message\UploadedFileInterface;
use Commercetools\Api\Models\ShippingMethod\ShippingMethodUpdate;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 * @psalm-immutable
 */
class ResourceByProjectKeyShippingMethodsByID extends ApiResource
{
    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyShippingMethodsByIDGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyShippingMethodsByIDGet((string) $args['projectKey'], (string) $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?ShippingMethodUpdate $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?ShippingMethodUpdate $body = null, array $headers = []): ByProjectKeyShippingMethodsByIDPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyShippingMethodsByIDPost((string) $args['projectKey'], (string) $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function delete($body = null, array $headers = []): ByProjectKeyShippingMethodsByIDDelete
    {
        $args = $this->getArgs();

        return new ByProjectKeyShippingMethodsByIDDelete((string) $args['projectKey'], (string) $args['ID'], $body, $headers, $this->getClient());
    }

}
