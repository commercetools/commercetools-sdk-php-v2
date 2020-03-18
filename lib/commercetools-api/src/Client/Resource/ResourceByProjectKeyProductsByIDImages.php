<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Client\ApiResource;
use File;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyProductsByIDImages extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/products/{ID}/images', $args, $client);
    }

    /**
     * @psalm-param ?UploadedFileInterface $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?UploadedFileInterface $body = null, array $headers = []): ByProjectKeyProductsByIDImagesPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyProductsByIDImagesPost($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
}
