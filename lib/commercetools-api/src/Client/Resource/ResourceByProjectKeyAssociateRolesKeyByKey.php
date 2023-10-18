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
class ResourceByProjectKeyAssociateRolesKeyByKey extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/associate-roles/key={key}', $args, $client);
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyAssociateRolesKeyByKeyGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyAssociateRolesKeyByKeyGet($args['projectKey'], $args['key'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function head($body = null, array $headers = []): ByProjectKeyAssociateRolesKeyByKeyHead
    {
        $args = $this->getArgs();

        return new ByProjectKeyAssociateRolesKeyByKeyHead($args['projectKey'], $args['key'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?AssociateRoleUpdate $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?AssociateRoleUpdate $body = null, array $headers = []): ByProjectKeyAssociateRolesKeyByKeyPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyAssociateRolesKeyByKeyPost($args['projectKey'], $args['key'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function delete($body = null, array $headers = []): ByProjectKeyAssociateRolesKeyByKeyDelete
    {
        $args = $this->getArgs();

        return new ByProjectKeyAssociateRolesKeyByKeyDelete($args['projectKey'], $args['key'], $body, $headers, $this->getClient());
    }
}
