<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Client\ApiResource;
use File;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 * @psalm-immutable
 */
class ResourceByProjectKeyProductsByIDImages extends ApiResource
{
    /**
     * @psalm-param ?UploadedFileInterface $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?UploadedFileInterface $body = null, array $headers = []): ByProjectKeyProductsByIDImagesPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyProductsByIDImagesPost((string) $args['projectKey'], (string) $args['ID'], $body, $headers, $this->getClient());
    }
}
