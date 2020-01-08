<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Base\Builder;

/**
 * @implements Builder<CartDiscountChangeCartPredicateAction>
 */
final class CartDiscountChangeCartPredicateActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $cartPredicate;

    /**
     * <p>A valid Cart predicate.</p>.
     *
     * @return null|string
     */
    public function getCartPredicate()
    {
        return $this->cartPredicate;
    }

    /**
     * @return $this
     */
    public function withCartPredicate(?string $cartPredicate)
    {
        $this->cartPredicate = $cartPredicate;

        return $this;
    }

    public function build(): CartDiscountChangeCartPredicateAction
    {
        return new CartDiscountChangeCartPredicateActionModel(
            $this->cartPredicate
        );
    }

    public static function of(): CartDiscountChangeCartPredicateActionBuilder
    {
        return new self();
    }
}
