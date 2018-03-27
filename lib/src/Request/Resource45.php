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
    public function withId($ID = null): Resource46 {
        $args = array_merge($this->getArgs(), array_filter(['ID' => $ID], function($value) { return !is_null($value); }));
        return new Resource46($this->getUri() . '/{ID}', $args, $this->getMapper());
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
    public function post(ProductDiscountDraft $body = null): ByProjectKeyProductDiscountsPost {
        $args = $this->getArgs();
        return new ByProjectKeyProductDiscountsPost($args['projectKey'], $body);
    }


    public function update(ProductDiscount $productDiscount)
    {
        $builder = new ProductDiscountUpdateBuilder(function(ProductDiscountUpdateBuilder $builder) { return $this->withIDValue($builder->getResource()->getId())->post($builder->build()); });
        $builder->with($productDiscount);
        if ($productDiscount instanceof MapperAware) {
            $builder->setMapper($productDiscount->getMapper());
        }
        return $builder;
    }

    public function delete(ProductDiscount $productDiscount)
    {
        return $this->withIDValue($productDiscount->getId())->delete()->withVersion($productDiscount->getVersion());
    }

    /**
     * @param ProductDiscountDraft|callable $productDiscountDraftDraft builder function <code>
     *   function(ProductDiscountDraft $productDiscountDraft): ProductDiscountDraft {
     *     // modify $draft as needed
     *     return $productDiscountDraft;
     *   }
     *   </code>
     */
    public function create($productDiscountDraft)
    {
        if (is_callable($productDiscountDraft)) {
            $callback = $productDiscountDraft;
            $emptyDraft = $this->mapData(ProductDiscountDraft::class, null);
            $productDiscountDraft = $callback($emptyDraft);
        }
        if (!$productDiscountDraft instanceof ProductDiscountDraft) {
            throw new \InvalidArgumentException();
        }
        return $this->post($productDiscountDraft);
    }
}
