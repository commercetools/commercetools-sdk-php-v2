<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Psr\Http\Message\UploadedFileInterface;


class ResourceByProjectKeyProductsByIDImages extends Resource
{
    /**
     * @param UploadedFileInterface $body
     * @return ByProjectKeyProductsByIDImagesPost
     */
    public function post(UploadedFileInterface $body = null): ByProjectKeyProductsByIDImagesPost {
        $args = $this->getArgs();
        return new ByProjectKeyProductsByIDImagesPost($args['projectKey'], $args['ID'], $body);
    }

}
