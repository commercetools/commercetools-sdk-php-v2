<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Zone\ZoneDraft;
use Commercetools\Client\ApiResource;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyZones extends ApiResource
{
    public function withKey(string $key = null): ResourceByProjectKeyZonesKeyByKey
    {
        $args = $this->getArgs();
        if (!is_null($key)) {
            $args['key'] = $key;
        }

        return new ResourceByProjectKeyZonesKeyByKey($this->getUri() . '/key={key}', $args, $this->getClient());
    }
    public function withId(string $ID = null): ResourceByProjectKeyZonesByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyZonesByID($this->getUri() . '/{ID}', $args, $this->getClient());
    }

    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyZonesGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyZonesGet((string) $args['projectKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?ZoneDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?ZoneDraft $body = null, array $headers = []): ByProjectKeyZonesPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyZonesPost((string) $args['projectKey'], $body, $headers, $this->getClient());
    }
}
