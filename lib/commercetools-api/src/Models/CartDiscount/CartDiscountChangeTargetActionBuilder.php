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
 * @implements Builder<CartDiscountChangeTargetAction>
 */
final class CartDiscountChangeTargetActionBuilder implements Builder
{
    /**

     * @var null|CartDiscountTarget|CartDiscountTargetBuilder
     */
    private $target;

    /**
     * <p>New value to set.</p>
     *

     * @return null|CartDiscountTarget
     */
    public function getTarget()
    {
        return $this->target instanceof CartDiscountTargetBuilder ? $this->target->build() : $this->target;
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
     * @deprecated use withTarget() instead
     * @return $this
     */
    public function withTargetBuilder(?CartDiscountTargetBuilder $target)
    {
        $this->target = $target;

        return $this;
    }

    public function build(): CartDiscountChangeTargetAction
    {
        return new CartDiscountChangeTargetActionModel(
            $this->target instanceof CartDiscountTargetBuilder ? $this->target->build() : $this->target
        );
    }

    public static function of(): CartDiscountChangeTargetActionBuilder
    {
        return new self();
    }
}
