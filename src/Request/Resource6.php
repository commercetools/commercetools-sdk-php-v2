<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Base\MapperAware;
use Commercetools\Types\CartDiscount\CartDiscount;
use Commercetools\Builder\CartDiscountUpdateBuilder;

use Commercetools\Types\CartDiscount\CartDiscountDraft;


class Resource6 extends Resource
{
    /**
     * @return Resource7
     */
    public function withIDValue($ID = null): Resource7 {
        $args = array_merge($this->getArgs(), array_filter(['ID' => $ID], function($value) { return !is_null($value); }));
        return new Resource7($this->getUri() . '/{ID}', $args);
    }


    /**
     * @return ByProjectKeyCartDiscountsGet
     */
    public function get(): ByProjectKeyCartDiscountsGet {
        $args = $this->getArgs();
        return new ByProjectKeyCartDiscountsGet($args['projectKey']);
    }
    /**
     * @param CartDiscountDraft $body
     * @return ByProjectKeyCartDiscountsPost
     */
    public function post(CartDiscountDraft $body): ByProjectKeyCartDiscountsPost {
        $args = $this->getArgs();
        return new ByProjectKeyCartDiscountsPost($args['projectKey'], $body);
    }


    public function update(CartDiscount $resource)
    {
        $builder = new CartDiscountUpdateBuilder(function (CartDiscountUpdateBuilder $builder) { return $this->withIDValue($builder->getResource()->getId())->post($builder->build()); });
        $builder->with($resource);
        if ($resource instanceof MapperAware) {
            $builder->setMapper($resource->getMapper());
        }
        return $builder;
    }
}
