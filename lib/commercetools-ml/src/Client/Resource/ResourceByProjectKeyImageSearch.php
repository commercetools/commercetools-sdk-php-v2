<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Client\Resource;

use Commercetools\Client\ApiResource;
use File;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyImageSearch extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/image-search', $args, $client);
    }

    /**
     * @psalm-param ?UploadedFileInterface $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?UploadedFileInterface $body = null, array $headers = []): ByProjectKeyImageSearchPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyImageSearchPost($args['projectKey'], $body, $headers, $this->getClient());
    }
}
