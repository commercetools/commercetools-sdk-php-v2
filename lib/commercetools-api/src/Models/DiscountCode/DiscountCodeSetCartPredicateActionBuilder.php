<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\DiscountCode;

use Commercetools\Base\Builder;

/**
 * @implements Builder<DiscountCodeSetCartPredicateAction>
 */
final class DiscountCodeSetCartPredicateActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $cartPredicate;

    /**
     * <p>If the <code>cartPredicate</code> parameter is not included, the field will be emptied.</p>.
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

    public function build(): DiscountCodeSetCartPredicateAction
    {
        return new DiscountCodeSetCartPredicateActionModel(
            $this->cartPredicate
        );
    }

    public static function of(): DiscountCodeSetCartPredicateActionBuilder
    {
        return new self();
    }
}
