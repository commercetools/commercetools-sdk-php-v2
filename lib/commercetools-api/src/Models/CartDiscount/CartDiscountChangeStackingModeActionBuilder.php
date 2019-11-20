<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Base\Builder;

/**
 * @implements Builder<CartDiscountChangeStackingModeAction>
 */
final class CartDiscountChangeStackingModeActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $stackingMode;

    /**
     * @return null|string
     */
    public function getStackingMode()
    {
        return $this->stackingMode;
    }

    /**
     * @return $this
     */
    public function withStackingMode(?string $stackingMode)
    {
        $this->stackingMode = $stackingMode;

        return $this;
    }

    public function build(): CartDiscountChangeStackingModeAction
    {
        return new CartDiscountChangeStackingModeActionModel(
            $this->stackingMode
        );
    }

    public static function of(): CartDiscountChangeStackingModeActionBuilder
    {
        return new self();
    }
}
