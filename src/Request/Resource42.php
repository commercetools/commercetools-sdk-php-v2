<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Types\Product\ProductUpdate;



class Resource42 extends Resource
{
    /**
     * @return Resource43
     */
    public function images(): Resource43 {
        return new Resource43($this->getUri() . '/images', $this->getArgs());
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
    public function post(ProductUpdate $body): ByProjectKeyProductsByIDPost {
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
