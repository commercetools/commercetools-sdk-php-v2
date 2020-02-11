<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Client\ApiResource;
use Psr\Http\Message\UploadedFileInterface;
use Commercetools\Api\Models\Zone\ZoneUpdate;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 * @psalm-immutable
 */
class ResourceByProjectKeyZonesKeyByKey extends ApiResource
{
    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyZonesKeyByKeyGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyZonesKeyByKeyGet((string) $args['projectKey'], (string) $args['key'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?ZoneUpdate $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?ZoneUpdate $body = null, array $headers = []): ByProjectKeyZonesKeyByKeyPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyZonesKeyByKeyPost((string) $args['projectKey'], (string) $args['key'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function delete($body = null, array $headers = []): ByProjectKeyZonesKeyByKeyDelete
    {
        $args = $this->getArgs();

        return new ByProjectKeyZonesKeyByKeyDelete((string) $args['projectKey'], (string) $args['key'], $body, $headers, $this->getClient());
    }

}
