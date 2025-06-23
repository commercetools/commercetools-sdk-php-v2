<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Api\Models\DiscountGroup\DiscountGroupResourceIdentifier;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CartDiscountSetDiscountGroupAction extends CartDiscountUpdateAction
{
    public const FIELD_DISCOUNT_GROUP = 'discountGroup';
    public const FIELD_SORT_ORDER = 'sortOrder';

    /**
     * <p>Reference to a DiscountGroup that the Cart Discount must belong to.
     * If empty, any existing value will be removed.</p>
     *

     * @return null|DiscountGroupResourceIdentifier
     */
    public function getDiscountGroup();

    /**
     * <p>New value to set (between <code>0</code> and <code>1</code>) that determines the order in which the CartDiscounts are applied; a CartDiscount with a higher value is prioritized.</p>
     * <p>Required if <code>discountGroup</code> is absent. If <code>discountGroup</code> is set, the CartDiscount will use the sort order of the DiscountGroup.</p>
     *

     * @return null|string
     */
    public function getSortOrder();

    /**
     * @param ?DiscountGroupResourceIdentifier $discountGroup
     */
    public function setDiscountGroup(?DiscountGroupResourceIdentifier $discountGroup): void;

    /**
     * @param ?string $sortOrder
     */
    public function setSortOrder(?string $sortOrder): void;
}
