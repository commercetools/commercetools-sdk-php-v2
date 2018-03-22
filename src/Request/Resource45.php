<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Base\MapperAware;
use Commercetools\Types\ProductDiscount\ProductDiscount;
use Commercetools\Builder\ProductDiscountUpdateBuilder;

use Commercetools\Types\ProductDiscount\ProductDiscountDraft;


class Resource45 extends Resource
{
    /**
     * @return Resource46
     */
    public function withIDValue($ID = null): Resource46 {
        $args = array_merge($this->getArgs(), array_filter(['ID' => $ID], function($value) { return !is_null($value); }));
        return new Resource46($this->getUri() . '/{ID}', $args);
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


    public function update(ProductDiscount $resource)
    {
        $builder = new ProductDiscountUpdateBuilder(function (ProductDiscountUpdateBuilder $builder) { return $this->withIDValue($builder->getResource()->getId())->post($builder->build()); });
        $builder->with($resource);
        if ($resource instanceof MapperAware) {
            $builder->setMapper($resource->getMapper());
        }
        return $builder;
    }
}
