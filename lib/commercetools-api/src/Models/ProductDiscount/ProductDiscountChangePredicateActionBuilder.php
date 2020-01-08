<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductDiscount;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ProductDiscountChangePredicateAction>
 */
final class ProductDiscountChangePredicateActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $predicate;

    /**
     * <p>A valid ProductDiscount Predicate.</p>.
     *
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

    public function build(): ProductDiscountChangePredicateAction
    {
        return new ProductDiscountChangePredicateActionModel(
            $this->predicate
        );
    }

    public static function of(): ProductDiscountChangePredicateActionBuilder
    {
        return new self();
    }
}
