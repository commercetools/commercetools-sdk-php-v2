<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Zone\ZoneDraft;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyZones extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/zones', $args, $client);
    }

    /**
     */
    public function withKey(string $key = null): ResourceByProjectKeyZonesKeyByKey
    {
        $args = $this->getArgs();
        if (!is_null($key)) {
            $args['key'] = $key;
        }

        return new ResourceByProjectKeyZonesKeyByKey($args, $this->getClient());
    }
    /**
     */
    public function withId(string $ID = null): ResourceByProjectKeyZonesByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyZonesByID($args, $this->getClient());
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyZonesGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyZonesGet($args['projectKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function head($body = null, array $headers = []): ByProjectKeyZonesHead
    {
        $args = $this->getArgs();

        return new ByProjectKeyZonesHead($args['projectKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?ZoneDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?ZoneDraft $body = null, array $headers = []): ByProjectKeyZonesPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyZonesPost($args['projectKey'], $body, $headers, $this->getClient());
    }
}
