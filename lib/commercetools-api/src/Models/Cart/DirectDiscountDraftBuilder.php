<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\CartDiscount\CartDiscountTarget;
use Commercetools\Api\Models\CartDiscount\CartDiscountTargetBuilder;
use Commercetools\Api\Models\CartDiscount\CartDiscountValue;
use Commercetools\Api\Models\CartDiscount\CartDiscountValueBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<DirectDiscountDraft>
 */
final class DirectDiscountDraftBuilder implements Builder
{
    /**
     * @var null|CartDiscountValue|CartDiscountValueBuilder
     */
    private $value;

    /**
     * @var null|CartDiscountTarget|CartDiscountTargetBuilder
     */
    private $target;

    /**
     * @return null|CartDiscountValue
     */
    public function getValue()
    {
        return $this->value instanceof CartDiscountValueBuilder ? $this->value->build() : $this->value;
    }

    /**
     * <p>Empty when the <code>value</code> has type <code>giftLineItem</code>, otherwise a CartDiscountTarget is set.</p>
     *
     * @return null|CartDiscountTarget
     */
    public function getTarget()
    {
        return $this->target instanceof CartDiscountTargetBuilder ? $this->target->build() : $this->target;
    }

    /**
     * @param ?CartDiscountValue $value
     * @return $this
     */
    public function withValue(?CartDiscountValue $value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @param ?CartDiscountTarget $target
     * @return $this
     */
    public function withTarget(?CartDiscountTarget $target)
    {
        $this->target = $target;

        return $this;
    }

    /**
     * @deprecated use withValue() instead
     * @return $this
     */
    public function withValueBuilder(?CartDiscountValueBuilder $value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @deprecated use withTarget() instead
     * @return $this
     */
    public function withTargetBuilder(?CartDiscountTargetBuilder $target)
    {
        $this->target = $target;

        return $this;
    }

    public function build(): DirectDiscountDraft
    {
        return new DirectDiscountDraftModel(
            $this->value instanceof CartDiscountValueBuilder ? $this->value->build() : $this->value,
            $this->target instanceof CartDiscountTargetBuilder ? $this->target->build() : $this->target
        );
    }

    public static function of(): DirectDiscountDraftBuilder
    {
        return new self();
    }
}
