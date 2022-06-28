<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductDiscount;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

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
     * <p>New value to set.
     * Must not be empty.
     * The string value must be a number between <code>0</code> and <code>1</code>.
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
