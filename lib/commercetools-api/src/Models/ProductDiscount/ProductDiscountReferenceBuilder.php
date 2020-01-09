<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductDiscount;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ProductDiscountReference>
 */
final class ProductDiscountReferenceBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $id;

    /**
     * @var null|ProductDiscount|ProductDiscountBuilder
     */
    private $obj;

    /**
     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return null|ProductDiscount
     */
    public function getObj()
    {
        return $this->obj instanceof ProductDiscountBuilder ? $this->obj->build() : $this->obj;
    }

    /**
     * @return $this
     */
    public function withId(?string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return $this
     */
    public function withObj(?ProductDiscount $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    /**
     * @return $this
     */
    public function withObjBuilder(?ProductDiscountBuilder $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    public function build(): ProductDiscountReference
    {
        return new ProductDiscountReferenceModel(
            $this->id,
            $this->obj instanceof ProductDiscountBuilder ? $this->obj->build() : $this->obj
        );
    }

    public static function of(): ProductDiscountReferenceBuilder
    {
        return new self();
    }
}
