<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyProductProjections extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ?ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/product-projections', $args, $client);
    }

    /**
     */
    public function search(): ResourceByProjectKeyProductProjectionsSearch
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyProductProjectionsSearch($args, $this->getClient());
    }
    /**
     */
    public function suggest(): ResourceByProjectKeyProductProjectionsSuggest
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyProductProjectionsSuggest($args, $this->getClient());
    }
    /**
     */
    public function withKey(?string $key = null): ResourceByProjectKeyProductProjectionsKeyByKey
    {
        $args = $this->getArgs();
        if (!is_null($key)) {
            $args['key'] = $key;
        }

        return new ResourceByProjectKeyProductProjectionsKeyByKey($args, $this->getClient());
    }
    /**
     */
    public function withId(?string $ID = null): ResourceByProjectKeyProductProjectionsByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyProductProjectionsByID($args, $this->getClient());
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyProductProjectionsGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyProductProjectionsGet($args['projectKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function head($body = null, array $headers = []): ByProjectKeyProductProjectionsHead
    {
        $args = $this->getArgs();

        return new ByProjectKeyProductProjectionsHead($args['projectKey'], $body, $headers, $this->getClient());
    }
}
