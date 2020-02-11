<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Client\ApiResource;
use Psr\Http\Message\UploadedFileInterface;
use Commercetools\Api\Models\Extension\ExtensionUpdate;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 * @psalm-immutable
 */
class ResourceByProjectKeyExtensionsKeyByKey extends ApiResource
{
    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyExtensionsKeyByKeyGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyExtensionsKeyByKeyGet((string) $args['projectKey'], (string) $args['key'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?ExtensionUpdate $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?ExtensionUpdate $body = null, array $headers = []): ByProjectKeyExtensionsKeyByKeyPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyExtensionsKeyByKeyPost((string) $args['projectKey'], (string) $args['key'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function delete($body = null, array $headers = []): ByProjectKeyExtensionsKeyByKeyDelete
    {
        $args = $this->getArgs();

        return new ByProjectKeyExtensionsKeyByKeyDelete((string) $args['projectKey'], (string) $args['key'], $body, $headers, $this->getClient());
    }

}
