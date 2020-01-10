<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Type\TypeDraft;
use Commercetools\Client\ApiResource;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 * @psalm-immutable
 */
class ResourceByProjectKeyTypes extends ApiResource
{
    public function withKey(string $key = null): ResourceByProjectKeyTypesKeyByKey
    {
        $args = $this->getArgs();
        if (!is_null($key)) {
            $args['key'] = $key;
        }

        return new ResourceByProjectKeyTypesKeyByKey($this->getUri().'/key={key}', $args, $this->getClient());
    }

    public function withId(string $ID = null): ResourceByProjectKeyTypesByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyTypesByID($this->getUri().'/{ID}', $args, $this->getClient());
    }

    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     *
     * @param null|mixed $body
     */
    public function get($body = null, array $headers = []): ByProjectKeyTypesGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyTypesGet((string) $args['projectKey'], $body, $headers, $this->getClient());
    }

    /**
     * @psalm-param ?TypeDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?TypeDraft $body = null, array $headers = []): ByProjectKeyTypesPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyTypesPost((string) $args['projectKey'], $body, $headers, $this->getClient());
    }
}
