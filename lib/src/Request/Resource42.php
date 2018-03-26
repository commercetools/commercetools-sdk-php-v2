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
     * @return ByProjectKeyProductsKeyByKeyGet
     */
    public function get(): ByProjectKeyProductsKeyByKeyGet {
        $args = $this->getArgs();
        return new ByProjectKeyProductsKeyByKeyGet($args['projectKey'], $args['key']);
    }
    /**
     * @param ProductUpdate $body
     * @return ByProjectKeyProductsKeyByKeyPost
     */
    public function post(ProductUpdate $body = null): ByProjectKeyProductsKeyByKeyPost {
        $args = $this->getArgs();
        return new ByProjectKeyProductsKeyByKeyPost($args['projectKey'], $args['key'], $body);
    }
    /**
     * @return ByProjectKeyProductsKeyByKeyDelete
     */
    public function delete(): ByProjectKeyProductsKeyByKeyDelete {
        $args = $this->getArgs();
        return new ByProjectKeyProductsKeyByKeyDelete($args['projectKey'], $args['key']);
    }

}
