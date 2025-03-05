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
class ResourceByProjectKeyOrdersEditsByID extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ?ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/orders/edits/{ID}', $args, $client);
    }

    /**
     */
    public function apply(): ResourceByProjectKeyOrdersEditsByIDApply
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyOrdersEditsByIDApply($args, $this->getClient());
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyOrdersEditsByIDGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyOrdersEditsByIDGet($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function head($body = null, array $headers = []): ByProjectKeyOrdersEditsByIDHead
    {
        $args = $this->getArgs();

        return new ByProjectKeyOrdersEditsByIDHead($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?OrderEditUpdate $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?OrderEditUpdate $body = null, array $headers = []): ByProjectKeyOrdersEditsByIDPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyOrdersEditsByIDPost($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function delete($body = null, array $headers = []): ByProjectKeyOrdersEditsByIDDelete
    {
        $args = $this->getArgs();

        return new ByProjectKeyOrdersEditsByIDDelete($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
}
