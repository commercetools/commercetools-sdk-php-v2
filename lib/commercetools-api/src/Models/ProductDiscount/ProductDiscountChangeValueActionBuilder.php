<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductDiscount;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

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
     * <p>New value to set. Must not be empty.</p>
     *

     * @return null|ProductDiscountValueDraft
     */
    public function getValue()
    {
        return $this->value instanceof ProductDiscountValueDraftBuilder ? $this->value->build() : $this->value;
    }

    /**
     * @param ?ProductDiscountValueDraft $value
     * @return $this
     */
    public function withValue(?ProductDiscountValueDraft $value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @deprecated use withValue() instead
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
