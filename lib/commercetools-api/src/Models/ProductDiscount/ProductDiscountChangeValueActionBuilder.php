<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductDiscount;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ProductDiscountChangeValueAction>
 */
final class ProductDiscountChangeValueActionBuilder implements Builder
{
    /**
     * @var null|ProductDiscountValueDraft|ProductDiscountValueDraftBuilder
     */
    private $value;

    /**
     * @return null|ProductDiscountValueDraft
     */
    public function getValue()
    {
        return $this->value instanceof ProductDiscountValueDraftBuilder ? $this->value->build() : $this->value;
    }

    /**
     * @return $this
     */
    public function withValue(?ProductDiscountValueDraft $value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @return $this
     */
    public function withValueBuilder(?ProductDiscountValueDraftBuilder $value)
    {
        $this->value = $value;

        return $this;
    }

    public function build(): ProductDiscountChangeValueAction
    {
        return new ProductDiscountChangeValueActionModel(
            $this->value instanceof ProductDiscountValueDraftBuilder ? $this->value->build() : $this->value
        );
    }

    public static function of(): ProductDiscountChangeValueActionBuilder
    {
        return new self();
    }
}
