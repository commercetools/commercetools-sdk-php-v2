<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Types\ProductType\ProductTypeUpdate;



class Resource54 extends Resource
{
    /**
     * @return ByProjectKeyProductTypesByIDGet
     */
    public function get(): ByProjectKeyProductTypesByIDGet {
        $args = $this->getArgs();
        return new ByProjectKeyProductTypesByIDGet($args['projectKey'], $args['ID']);
    }
    /**
     * @param ProductTypeUpdate $body
     * @return ByProjectKeyProductTypesByIDPost
     */
    public function post(ProductTypeUpdate $body = null): ByProjectKeyProductTypesByIDPost {
        $args = $this->getArgs();
        return new ByProjectKeyProductTypesByIDPost($args['projectKey'], $args['ID'], $body);
    }
    /**
     * @return ByProjectKeyProductTypesByIDDelete
     */
    public function delete(): ByProjectKeyProductTypesByIDDelete {
        $args = $this->getArgs();
        return new ByProjectKeyProductTypesByIDDelete($args['projectKey'], $args['ID']);
    }

}
