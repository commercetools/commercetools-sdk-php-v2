<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Types\ProductDiscount\ProductDiscountUpdate;



class Resource46 extends Resource
{
    /**
     * @return ByProjectKeyProductDiscountsByIDGet
     */
    public function get(): ByProjectKeyProductDiscountsByIDGet {
        $args = $this->getArgs();
        return new ByProjectKeyProductDiscountsByIDGet($args['projectKey'], $args['ID']);
    }
    /**
     * @param ProductDiscountUpdate $body
     * @return ByProjectKeyProductDiscountsByIDPost
     */
    public function post(ProductDiscountUpdate $body): ByProjectKeyProductDiscountsByIDPost {
        $args = $this->getArgs();
        return new ByProjectKeyProductDiscountsByIDPost($args['projectKey'], $args['ID'], $body);
    }
    /**
     * @return ByProjectKeyProductDiscountsByIDDelete
     */
    public function delete(): ByProjectKeyProductDiscountsByIDDelete {
        $args = $this->getArgs();
        return new ByProjectKeyProductDiscountsByIDDelete($args['projectKey'], $args['ID']);
    }

}
