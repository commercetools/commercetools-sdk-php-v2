<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductDiscount;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ProductDiscountChangeSortOrderAction>
 */
final class ProductDiscountChangeSortOrderActionBuilder implements Builder
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

    public function build(): ProductDiscountChangeSortOrderAction
    {
        return new ProductDiscountChangeSortOrderActionModel(
            $this->sortOrder
        );
    }

    public static function of(): ProductDiscountChangeSortOrderActionBuilder
    {
        return new self();
    }
}
