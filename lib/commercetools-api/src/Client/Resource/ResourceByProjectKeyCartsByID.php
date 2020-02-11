<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Client\ApiResource;
use Psr\Http\Message\UploadedFileInterface;
use Commercetools\Api\Models\Cart\CartUpdate;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 * @psalm-immutable
 */
class ResourceByProjectKeyCartsByID extends ApiResource
{
    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyCartsByIDGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyCartsByIDGet((string) $args['projectKey'], (string) $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?CartUpdate $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?CartUpdate $body = null, array $headers = []): ByProjectKeyCartsByIDPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyCartsByIDPost((string) $args['projectKey'], (string) $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function delete($body = null, array $headers = []): ByProjectKeyCartsByIDDelete
    {
        $args = $this->getArgs();

        return new ByProjectKeyCartsByIDDelete((string) $args['projectKey'], (string) $args['ID'], $body, $headers, $this->getClient());
    }

}
