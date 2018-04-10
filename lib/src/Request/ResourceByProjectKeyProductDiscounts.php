<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Base\MapperAware;
use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\ProductDiscount\ProductDiscount;
use Commercetools\Builder\ProductDiscountUpdateBuilder;

use Commercetools\Types\ProductDiscount\ProductDiscountDraft;


class ResourceByProjectKeyProductDiscounts extends Resource
{
    /**
     * @return ResourceByProjectKeyProductDiscountsMatching
     */
    public function matching(): ResourceByProjectKeyProductDiscountsMatching {
        return new ResourceByProjectKeyProductDiscountsMatching($this->getUri() . '/matching', $this->getArgs(), $this->getMapper());
    }
    /**
     * @return ResourceByProjectKeyProductDiscountsByID
     */
    public function withId($ID = null): ResourceByProjectKeyProductDiscountsByID {
        $args = array_merge($this->getArgs(), array_filter(['ID' => $ID], function($value) { return !is_null($value); }));
        return new ResourceByProjectKeyProductDiscountsByID($this->getUri() . '/{ID}', $args, $this->getMapper());
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


    /**
     * @param ProductDiscount $productDiscount
     * @return ProductDiscountUpdateBuilder
     */
    public function update(ProductDiscount $productDiscount): ProductDiscountUpdateBuilder
    {
        $builder = new ProductDiscountUpdateBuilder(function(ProductDiscountUpdateBuilder $builder) { return $this->withId($builder->getResource()->getId())->post($builder->build()); });
        $builder->with($productDiscount);
        if ($productDiscount instanceof MapperAware) {
            $builder->setMapper($productDiscount->getMapper());
        }
        return $builder;
    }

    /**
     * @param ProductDiscount $productDiscount
     * @return ByProjectKeyProductDiscountsByIDDelete
     */
    public function delete(ProductDiscount $productDiscount): ByProjectKeyProductDiscountsByIDDelete
    {
        return $this->withId($productDiscount->getId())->delete()->withVersion($productDiscount->getVersion());
    }

    /**
     * @param ProductDiscountDraft|callable $productDiscountDraft builder function <code>
     *   function(ProductDiscountDraft $productDiscountDraft): ProductDiscountDraft {
     *     // modify $draft as needed
     *     return $productDiscountDraft;
     *   }
     *   </code>
     * @throws InvalidArgumentException
     * @return ByProjectKeyProductDiscountsPost
     */
    public function create($productDiscountDraft): ByProjectKeyProductDiscountsPost
    {
        if (is_callable($productDiscountDraft)) {
            $callback = $productDiscountDraft;
            $emptyDraft = $this->mapData(ProductDiscountDraft::class, null);
            $productDiscountDraft = $callback($emptyDraft);
        }
        if (!$productDiscountDraft instanceof ProductDiscountDraft) {
            throw new InvalidArgumentException();
        }
        return $this->post($productDiscountDraft);
    }
}
