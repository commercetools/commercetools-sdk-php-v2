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
 * @implements Builder<CartDiscountChangeSortOrderAction>
 */
final class CartDiscountChangeSortOrderActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $sortOrder;

    /**
     * <p>New value to set (between <code>0</code> and <code>1</code>).
     * A Discount with a higher sortOrder is prioritized.</p>
     *
     * @return null|string
     */
    public function getSortOrder()
    {
        return $this->sortOrder;
    }

    /**
     * @param ?string $sortOrder
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
