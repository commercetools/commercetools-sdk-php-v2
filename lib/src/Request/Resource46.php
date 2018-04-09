<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Types\ProductDiscount\ProductDiscountMatchQuery;


class Resource46 extends Resource
{
    /**
     * @param ProductDiscountMatchQuery $body
     * @return ByProjectKeyProductDiscountsMatchingPost
     */
    public function post(ProductDiscountMatchQuery $body = null): ByProjectKeyProductDiscountsMatchingPost {
        $args = $this->getArgs();
        return new ByProjectKeyProductDiscountsMatchingPost($args['projectKey'], $body);
    }

}
