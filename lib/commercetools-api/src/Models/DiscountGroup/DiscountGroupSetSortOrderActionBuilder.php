<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\DiscountGroup;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<DiscountGroupSetSortOrderAction>
 */
final class DiscountGroupSetSortOrderActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $sortOrder;

    /**
     * <p>New value to set (between <code>0</code> and <code>1</code>).
     * A CartDiscount with a higher value will be prioritized.</p>
     * <p>The sort order must be unique among all DiscountGroups and CartDiscounts.</p>
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


    public function build(): DiscountGroupSetSortOrderAction
    {
        return new DiscountGroupSetSortOrderActionModel(
            $this->sortOrder
        );
    }

    public static function of(): DiscountGroupSetSortOrderActionBuilder
    {
        return new self();
    }
}
