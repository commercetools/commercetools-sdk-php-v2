<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Types\DiscountCode\DiscountCodeDraft;


class Resource26 extends Resource
{
    /**
     * @return Resource27
     */
    public function withIDValue($ID = null): Resource27 {
        $args = array_merge($this->getArgs(), array_filter(['ID' => $ID], function($value) { return !is_null($value); }));
        return new Resource27($this->getUri() . '/{ID}', $args);
    }


    /**
     * @return ByProjectKeyDiscountCodesGet
     */
    public function get(): ByProjectKeyDiscountCodesGet {
        $args = $this->getArgs();
        return new ByProjectKeyDiscountCodesGet($args['projectKey']);
    }
    /**
     * @param DiscountCodeDraft $body
     * @return ByProjectKeyDiscountCodesPost
     */
    public function post(DiscountCodeDraft $body): ByProjectKeyDiscountCodesPost {
        $args = $this->getArgs();
        return new ByProjectKeyDiscountCodesPost($args['projectKey'], $body);
    }

}
