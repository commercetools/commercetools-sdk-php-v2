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
     * <p>The string must contain a number between 0 and 1.
     * A discount with greater sortOrder is prioritized higher than a discount with lower sortOrder.</p>
     *
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
