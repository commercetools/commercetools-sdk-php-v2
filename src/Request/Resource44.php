<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Types\ProductDiscount\ProductDiscountDraft;


class Resource44 extends Resource
{
    /**
     * @return Resource45
     */
    public function withIDValue($ID = null): Resource45 {
        $args = array_merge($this->getArgs(), array_filter(['ID' => $ID], function($value) { return !is_null($value); }));
        return new Resource45($this->getUri() . '/{ID}', $args);
    }


    /**
     * @return ByProjectKeyProductDiscountsGet
     */
    public function get(): ByProjectKeyProductDiscountsGet {
        $args = $this->getArgs();
        return new ByProjectKeyProductDiscountsGet($args['projectKey']);
    }
    /**
     * @param ProductDiscountDraft $body
     * @return ByProjectKeyProductDiscountsPost
     */
    public function post(ProductDiscountDraft $body): ByProjectKeyProductDiscountsPost {
        $args = $this->getArgs();
        return new ByProjectKeyProductDiscountsPost($args['projectKey'], $body);
    }

}
