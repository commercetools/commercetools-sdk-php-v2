<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\BusinessUnit\BusinessUnitUpdate;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyBusinessUnitsKeyByKey extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ?ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/business-units/key={key}', $args, $client);
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyBusinessUnitsKeyByKeyGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyBusinessUnitsKeyByKeyGet($args['projectKey'], $args['key'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function head($body = null, array $headers = []): ByProjectKeyBusinessUnitsKeyByKeyHead
    {
        $args = $this->getArgs();

        return new ByProjectKeyBusinessUnitsKeyByKeyHead($args['projectKey'], $args['key'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?BusinessUnitUpdate $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?BusinessUnitUpdate $body = null, array $headers = []): ByProjectKeyBusinessUnitsKeyByKeyPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyBusinessUnitsKeyByKeyPost($args['projectKey'], $args['key'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function delete($body = null, array $headers = []): ByProjectKeyBusinessUnitsKeyByKeyDelete
    {
        $args = $this->getArgs();

        return new ByProjectKeyBusinessUnitsKeyByKeyDelete($args['projectKey'], $args['key'], $body, $headers, $this->getClient());
    }
}
