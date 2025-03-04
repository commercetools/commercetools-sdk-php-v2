<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\AssociateRole\AssociateRoleDraft;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyAssociateRoles extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ?ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/associate-roles', $args, $client);
    }

    /**
     */
    public function withKey(?string $key = null): ResourceByProjectKeyAssociateRolesKeyByKey
    {
        $args = $this->getArgs();
        if (!is_null($key)) {
            $args['key'] = $key;
        }

        return new ResourceByProjectKeyAssociateRolesKeyByKey($args, $this->getClient());
    }
    /**
     */
    public function withId(?string $ID = null): ResourceByProjectKeyAssociateRolesByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyAssociateRolesByID($args, $this->getClient());
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyAssociateRolesGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyAssociateRolesGet($args['projectKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function head($body = null, array $headers = []): ByProjectKeyAssociateRolesHead
    {
        $args = $this->getArgs();

        return new ByProjectKeyAssociateRolesHead($args['projectKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?AssociateRoleDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?AssociateRoleDraft $body = null, array $headers = []): ByProjectKeyAssociateRolesPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyAssociateRolesPost($args['projectKey'], $body, $headers, $this->getClient());
    }
}
