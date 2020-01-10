<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Client\ApiResource;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 * @psalm-immutable
 */
class ResourceByProjectKeyCustomObjectsByContainerByKey extends ApiResource
{
    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     *
     * @param null|mixed $body
     */
    public function get($body = null, array $headers = []): ByProjectKeyCustomObjectsByContainerByKeyGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyCustomObjectsByContainerByKeyGet((string) $args['projectKey'], (string) $args['container'], (string) $args['key'], $body, $headers, $this->getClient());
    }

    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     *
     * @param null|mixed $body
     */
    public function delete($body = null, array $headers = []): ByProjectKeyCustomObjectsByContainerByKeyDelete
    {
        $args = $this->getArgs();

        return new ByProjectKeyCustomObjectsByContainerByKeyDelete((string) $args['projectKey'], (string) $args['container'], (string) $args['key'], $body, $headers, $this->getClient());
    }
}
