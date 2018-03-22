<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Types\ProductType\ProductTypeUpdate;



class Resource53 extends Resource
{
    /**
     * @return ByProjectKeyProductTypesKeyByKeyGet
     */
    public function get(): ByProjectKeyProductTypesKeyByKeyGet {
        $args = $this->getArgs();
        return new ByProjectKeyProductTypesKeyByKeyGet($args['projectKey'], $args['key']);
    }
    /**
     * @param ProductTypeUpdate $body
     * @return ByProjectKeyProductTypesKeyByKeyPost
     */
    public function post(ProductTypeUpdate $body): ByProjectKeyProductTypesKeyByKeyPost {
        $args = $this->getArgs();
        return new ByProjectKeyProductTypesKeyByKeyPost($args['projectKey'], $args['key'], $body);
    }
    /**
     * @return ByProjectKeyProductTypesKeyByKeyDelete
     */
    public function delete(): ByProjectKeyProductTypesKeyByKeyDelete {
        $args = $this->getArgs();
        return new ByProjectKeyProductTypesKeyByKeyDelete($args['projectKey'], $args['key']);
    }

}
