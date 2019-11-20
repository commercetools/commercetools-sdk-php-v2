<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Base\Builder;

/**
 * @implements Builder<CartDiscountLineItemsTarget>
 */
final class CartDiscountLineItemsTargetBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $predicate;

    /**
     * @return null|string
     */
    public function getPredicate()
    {
        return $this->predicate;
    }

    /**
     * @return $this
     */
    public function withPredicate(?string $predicate)
    {
        $this->predicate = $predicate;

        return $this;
    }

    public function build(): CartDiscountLineItemsTarget
    {
        return new CartDiscountLineItemsTargetModel(
            $this->predicate
        );
    }

    public static function of(): CartDiscountLineItemsTargetBuilder
    {
        return new self();
    }
}
