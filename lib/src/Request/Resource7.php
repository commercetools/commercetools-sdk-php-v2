<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Types\CartDiscount\CartDiscountUpdate;



class Resource7 extends Resource
{
    /**
     * @return ByProjectKeyCartDiscountsByIDGet
     */
    public function get(): ByProjectKeyCartDiscountsByIDGet {
        $args = $this->getArgs();
        return new ByProjectKeyCartDiscountsByIDGet($args['projectKey'], $args['ID']);
    }
    /**
     * @param CartDiscountUpdate $body
     * @return ByProjectKeyCartDiscountsByIDPost
     */
    public function post(CartDiscountUpdate $body): ByProjectKeyCartDiscountsByIDPost {
        $args = $this->getArgs();
        return new ByProjectKeyCartDiscountsByIDPost($args['projectKey'], $args['ID'], $body);
    }
    /**
     * @return ByProjectKeyCartDiscountsByIDDelete
     */
    public function delete(): ByProjectKeyCartDiscountsByIDDelete {
        $args = $this->getArgs();
        return new ByProjectKeyCartDiscountsByIDDelete($args['projectKey'], $args['ID']);
    }

}
