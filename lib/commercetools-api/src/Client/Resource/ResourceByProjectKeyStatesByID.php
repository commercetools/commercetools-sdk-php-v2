<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\State\StateUpdate;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyStatesByID extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/states/{ID}', $args, $client);
    }

    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyStatesByIDGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyStatesByIDGet($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?StateUpdate $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?StateUpdate $body = null, array $headers = []): ByProjectKeyStatesByIDPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyStatesByIDPost($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function delete($body = null, array $headers = []): ByProjectKeyStatesByIDDelete
    {
        $args = $this->getArgs();

        return new ByProjectKeyStatesByIDDelete($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
}
