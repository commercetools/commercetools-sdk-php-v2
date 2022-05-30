<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CartDiscountChangeValueAction>
 */
final class CartDiscountChangeValueActionBuilder implements Builder
{
    /**
     * @var null|CartDiscountValueDraft|CartDiscountValueDraftBuilder
     */
    private $value;

    /**
     * <p>New value to set.</p>
     *
     * @return null|CartDiscountValueDraft
     */
    public function getValue()
    {
        return $this->value instanceof CartDiscountValueDraftBuilder ? $this->value->build() : $this->value;
    }

    /**
     * @param ?CartDiscountValueDraft $value
     * @return $this
     */
    public function withValue(?CartDiscountValueDraft $value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @deprecated use withValue() instead
     * @return $this
     */
    public function withValueBuilder(?CartDiscountValueDraftBuilder $value)
    {
        $this->value = $value;

        return $this;
    }

    public function build(): CartDiscountChangeValueAction
    {
        return new CartDiscountChangeValueActionModel(
            $this->value instanceof CartDiscountValueDraftBuilder ? $this->value->build() : $this->value
        );
    }

    public static function of(): CartDiscountChangeValueActionBuilder
    {
        return new self();
    }
}
