<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Client\Resource;

use Commercetools\Client\ApiResource;
use Commercetools\Ml\Models\ImageSearchConfig\ImageSearchConfigRequest;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyImageSearchConfig extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/image-search/config', $args, $client);
    }

    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyImageSearchConfigGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyImageSearchConfigGet($args['projectKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?ImageSearchConfigRequest $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?ImageSearchConfigRequest $body = null, array $headers = []): ByProjectKeyImageSearchConfigPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyImageSearchConfigPost($args['projectKey'], $body, $headers, $this->getClient());
    }
}
