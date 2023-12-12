<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\AssociateRole\AssociateRoleUpdate;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyAssociateRolesByID extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/associate-roles/{ID}', $args, $client);
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyAssociateRolesByIDGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyAssociateRolesByIDGet($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function head($body = null, array $headers = []): ByProjectKeyAssociateRolesByIDHead
    {
        $args = $this->getArgs();

        return new ByProjectKeyAssociateRolesByIDHead($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?AssociateRoleUpdate $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?AssociateRoleUpdate $body = null, array $headers = []): ByProjectKeyAssociateRolesByIDPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyAssociateRolesByIDPost($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function delete($body = null, array $headers = []): ByProjectKeyAssociateRolesByIDDelete
    {
        $args = $this->getArgs();

        return new ByProjectKeyAssociateRolesByIDDelete($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
}
