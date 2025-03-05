<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\OrderEdit\OrderEditUpdate;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyOrdersEditsKeyByKey extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ?ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/orders/edits/key={key}', $args, $client);
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyOrdersEditsKeyByKeyGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyOrdersEditsKeyByKeyGet($args['projectKey'], $args['key'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function head($body = null, array $headers = []): ByProjectKeyOrdersEditsKeyByKeyHead
    {
        $args = $this->getArgs();

        return new ByProjectKeyOrdersEditsKeyByKeyHead($args['projectKey'], $args['key'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?OrderEditUpdate $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?OrderEditUpdate $body = null, array $headers = []): ByProjectKeyOrdersEditsKeyByKeyPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyOrdersEditsKeyByKeyPost($args['projectKey'], $args['key'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function delete($body = null, array $headers = []): ByProjectKeyOrdersEditsKeyByKeyDelete
    {
        $args = $this->getArgs();

        return new ByProjectKeyOrdersEditsKeyByKeyDelete($args['projectKey'], $args['key'], $body, $headers, $this->getClient());
    }
}
