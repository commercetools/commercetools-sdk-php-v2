<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\ApiClient\ApiClientDraft;
use Commercetools\Client\ApiResource;

/** @psalm-suppress PropertyNotSetInConstructor */
class ResourceByProjectKeyApiClients extends ApiResource
{
    /**
     * @psalm-param scalar $ID
     *
     * @param null|mixed $ID
     */
    public function withId($ID = null): ResourceByProjectKeyApiClientsByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyApiClientsByID($this->getUri().'/{ID}', $args, $this->getClient());
    }

    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     *
     * @param null|mixed $body
     */
    public function get($body = null, array $headers = []): ByProjectKeyApiClientsGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyApiClientsGet($args['projectKey'], $body, $headers, $this->getClient());
    }

    /**
     * @psalm-param ?ApiClientDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?ApiClientDraft $body = null, array $headers = []): ByProjectKeyApiClientsPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyApiClientsPost($args['projectKey'], $body, $headers, $this->getClient());
    }
}
