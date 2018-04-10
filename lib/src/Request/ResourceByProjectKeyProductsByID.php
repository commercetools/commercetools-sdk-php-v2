<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Types\Product\ProductUpdate;



class ResourceByProjectKeyProductsByID extends Resource
{
    /**
     * @return ResourceByProjectKeyProductsByIDImages
     */
    public function images(): ResourceByProjectKeyProductsByIDImages {
        return new ResourceByProjectKeyProductsByIDImages($this->getUri() . '/images', $this->getArgs(), $this->getMapper());
    }


    /**
     * @return ByProjectKeyProductsByIDGet
     */
    public function get(): ByProjectKeyProductsByIDGet {
        $args = $this->getArgs();
        return new ByProjectKeyProductsByIDGet($args['projectKey'], $args['ID']);
    }
    /**
     * @param ProductUpdate $body
     * @return ByProjectKeyProductsByIDPost
     */
    public function post(ProductUpdate $body = null): ByProjectKeyProductsByIDPost {
        $args = $this->getArgs();
        return new ByProjectKeyProductsByIDPost($args['projectKey'], $args['ID'], $body);
    }
    /**
     * @return ByProjectKeyProductsByIDDelete
     */
    public function delete(): ByProjectKeyProductsByIDDelete {
        $args = $this->getArgs();
        return new ByProjectKeyProductsByIDDelete($args['projectKey'], $args['ID']);
    }

}
