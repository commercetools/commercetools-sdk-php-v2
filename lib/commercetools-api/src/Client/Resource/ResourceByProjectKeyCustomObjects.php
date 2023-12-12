<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\CustomObject\CustomObjectDraft;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyCustomObjects extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/custom-objects', $args, $client);
    }

    /**
     */
    public function withContainerAndKey(string $container = null, string $key = null): ResourceByProjectKeyCustomObjectsByContainerByKey
    {
        $args = $this->getArgs();
        if (!is_null($container)) {
            $args['container'] = $container;
        }

        if (!is_null($key)) {
            $args['key'] = $key;
        }

        return new ResourceByProjectKeyCustomObjectsByContainerByKey($args, $this->getClient());
    }
    /**
     */
    public function withContainer(string $container = null): ResourceByProjectKeyCustomObjectsByContainer
    {
        $args = $this->getArgs();
        if (!is_null($container)) {
            $args['container'] = $container;
        }

        return new ResourceByProjectKeyCustomObjectsByContainer($args, $this->getClient());
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     * @deprecated
     */
    public function get($body = null, array $headers = []): ByProjectKeyCustomObjectsGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyCustomObjectsGet($args['projectKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function head($body = null, array $headers = []): ByProjectKeyCustomObjectsHead
    {
        $args = $this->getArgs();

        return new ByProjectKeyCustomObjectsHead($args['projectKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?CustomObjectDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?CustomObjectDraft $body = null, array $headers = []): ByProjectKeyCustomObjectsPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyCustomObjectsPost($args['projectKey'], $body, $headers, $this->getClient());
    }
}
