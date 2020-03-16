<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Client\ApiResource;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyProductProjections extends ApiResource
{
    public function search(): ResourceByProjectKeyProductProjectionsSearch
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyProductProjectionsSearch($this->getUri() . '/search', $args, $this->getClient());
    }
    public function suggest(): ResourceByProjectKeyProductProjectionsSuggest
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyProductProjectionsSuggest($this->getUri() . '/suggest', $args, $this->getClient());
    }
    public function withKey(string $key = null): ResourceByProjectKeyProductProjectionsKeyByKey
    {
        $args = $this->getArgs();
        if (!is_null($key)) {
            $args['key'] = $key;
        }

        return new ResourceByProjectKeyProductProjectionsKeyByKey($this->getUri() . '/key={key}', $args, $this->getClient());
    }
    public function withId(string $ID = null): ResourceByProjectKeyProductProjectionsByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyProductProjectionsByID($this->getUri() . '/{ID}', $args, $this->getClient());
    }

    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyProductProjectionsGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyProductProjectionsGet((string) $args['projectKey'], $body, $headers, $this->getClient());
    }
}
