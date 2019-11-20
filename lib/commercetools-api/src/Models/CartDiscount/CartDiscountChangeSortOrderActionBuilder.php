<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Base\Builder;

/**
 * @implements Builder<CartDiscountChangeSortOrderAction>
 */
final class CartDiscountChangeSortOrderActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $sortOrder;

    /**
     * @return null|string
     */
    public function getSortOrder()
    {
        return $this->sortOrder;
    }

    /**
     * @return $this
     */
    public function withSortOrder(?string $sortOrder)
    {
        $this->sortOrder = $sortOrder;

        return $this;
    }

    public function build(): CartDiscountChangeSortOrderAction
    {
        return new CartDiscountChangeSortOrderActionModel(
            $this->sortOrder
        );
    }

    public static function of(): CartDiscountChangeSortOrderActionBuilder
    {
        return new self();
    }
}
