<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Type\TypeDraft;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyTypes extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/types', $args, $client);
    }

    public function withKey(string $key = null): ResourceByProjectKeyTypesKeyByKey
    {
        $args = $this->getArgs();
        if (!is_null($key)) {
            $args['key'] = $key;
        }

        return new ResourceByProjectKeyTypesKeyByKey($args, $this->getClient());
    }
    public function withId(string $ID = null): ResourceByProjectKeyTypesByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyTypesByID($args, $this->getClient());
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyTypesGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyTypesGet($args['projectKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?TypeDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?TypeDraft$body = null, array $headers = []): ByProjectKeyTypesPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyTypesPost($args['projectKey'], $body, $headers, $this->getClient());
    }
}
