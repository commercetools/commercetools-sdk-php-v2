<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Api\Models\DiscountGroup\DiscountGroupResourceIdentifier;
use Commercetools\Api\Models\DiscountGroup\DiscountGroupResourceIdentifierBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CartDiscountSetDiscountGroupAction>
 */
final class CartDiscountSetDiscountGroupActionBuilder implements Builder
{
    /**

     * @var null|DiscountGroupResourceIdentifier|DiscountGroupResourceIdentifierBuilder
     */
    private $discountGroup;

    /**

     * @var ?string
     */
    private $sortOrder;

    /**
     * <p>Reference to a DiscountGroup that the Cart Discount must belong to.
     * If empty, any existing value will be removed.</p>
     *

     * @return null|DiscountGroupResourceIdentifier
     */
    public function getDiscountGroup()
    {
        return $this->discountGroup instanceof DiscountGroupResourceIdentifierBuilder ? $this->discountGroup->build() : $this->discountGroup;
    }

    /**
     * <p>New value to set (between <code>0</code> and <code>1</code>) that determines the order in which the CartDiscounts are applied; a CartDiscount with a higher value is prioritized.</p>
     * <p>Required if <code>discountGroup</code> is absent. If <code>discountGroup</code> is set, the CartDiscount will use the sort order of the DiscountGroup.</p>
     *

     * @return null|string
     */
    public function getSortOrder()
    {
        return $this->sortOrder;
    }

    /**
     * @param ?DiscountGroupResourceIdentifier $discountGroup
     * @return $this
     */
    public function withDiscountGroup(?DiscountGroupResourceIdentifier $discountGroup)
    {
        $this->discountGroup = $discountGroup;

        return $this;
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

    /**
     * @deprecated use withDiscountGroup() instead
     * @return $this
     */
    public function withDiscountGroupBuilder(?DiscountGroupResourceIdentifierBuilder $discountGroup)
    {
        $this->discountGroup = $discountGroup;

        return $this;
    }

    public function build(): CartDiscountSetDiscountGroupAction
    {
        return new CartDiscountSetDiscountGroupActionModel(
            $this->discountGroup instanceof DiscountGroupResourceIdentifierBuilder ? $this->discountGroup->build() : $this->discountGroup,
            $this->sortOrder
        );
    }

    public static function of(): CartDiscountSetDiscountGroupActionBuilder
    {
        return new self();
    }
}
