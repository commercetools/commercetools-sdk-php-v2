<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Zone\ZoneUpdate;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyZonesByID extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ?ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/zones/{ID}', $args, $client);
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyZonesByIDGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyZonesByIDGet($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function head($body = null, array $headers = []): ByProjectKeyZonesByIDHead
    {
        $args = $this->getArgs();

        return new ByProjectKeyZonesByIDHead($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?ZoneUpdate $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?ZoneUpdate $body = null, array $headers = []): ByProjectKeyZonesByIDPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyZonesByIDPost($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function delete($body = null, array $headers = []): ByProjectKeyZonesByIDDelete
    {
        $args = $this->getArgs();

        return new ByProjectKeyZonesByIDDelete($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
}
