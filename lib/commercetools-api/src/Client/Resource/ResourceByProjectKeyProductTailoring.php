<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\ProductTailoring\ProductTailoringDraft;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyProductTailoring extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ?ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/product-tailoring', $args, $client);
    }

    /**
     */
    public function withKey(?string $key = null): ResourceByProjectKeyProductTailoringKeyByKey
    {
        $args = $this->getArgs();
        if (!is_null($key)) {
            $args['key'] = $key;
        }

        return new ResourceByProjectKeyProductTailoringKeyByKey($args, $this->getClient());
    }
    /**
     */
    public function withId(?string $ID = null): ResourceByProjectKeyProductTailoringByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyProductTailoringByID($args, $this->getClient());
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyProductTailoringGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyProductTailoringGet($args['projectKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function head($body = null, array $headers = []): ByProjectKeyProductTailoringHead
    {
        $args = $this->getArgs();

        return new ByProjectKeyProductTailoringHead($args['projectKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?ProductTailoringDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?ProductTailoringDraft $body = null, array $headers = []): ByProjectKeyProductTailoringPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyProductTailoringPost($args['projectKey'], $body, $headers, $this->getClient());
    }
}
