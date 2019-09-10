<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Client\ApiResource;

/** @psalm-suppress PropertyNotSetInConstructor */
class ResourceByProjectKeyProductProjections extends ApiResource
{
    public function search(): ResourceByProjectKeyProductProjectionsSearch
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyProductProjectionsSearch($this->getUri().'/search', $args, $this->getClient());
    }

    public function suggest(): ResourceByProjectKeyProductProjectionsSuggest
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyProductProjectionsSuggest($this->getUri().'/suggest', $args, $this->getClient());
    }

    /**
     * @psalm-param scalar $key
     *
     * @param null|mixed $key
     */
    public function withKey($key = null): ResourceByProjectKeyProductProjectionsKeyByKey
    {
        $args = $this->getArgs();
        if (!is_null($key)) {
            $args['key'] = $key;
        }

        return new ResourceByProjectKeyProductProjectionsKeyByKey($this->getUri().'/key={key}', $args, $this->getClient());
    }

    /**
     * @psalm-param scalar $ID
     *
     * @param null|mixed $ID
     */
    public function withId($ID = null): ResourceByProjectKeyProductProjectionsByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyProductProjectionsByID($this->getUri().'/{ID}', $args, $this->getClient());
    }

    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     *
     * @param null|mixed $body
     */
    public function get($body = null, array $headers = []): ByProjectKeyProductProjectionsGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyProductProjectionsGet($args['projectKey'], $body, $headers, $this->getClient());
    }
}
