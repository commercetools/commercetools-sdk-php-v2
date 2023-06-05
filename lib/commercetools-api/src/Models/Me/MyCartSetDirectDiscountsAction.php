<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\Cart\DirectDiscountDraftCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface MyCartSetDirectDiscountsAction extends MyCartUpdateAction
{
    public const FIELD_DISCOUNTS = 'discounts';

    /**
     * <ul>
     * <li>If set, all existing Direct Discounts are replaced.
     * The discounts apply in the order they are added to the list.</li>
     * <li>If empty, all existing Direct Discounts are removed and all affected prices on the Cart or Order are recalculated.</li>
     * </ul>
     *

     * @return null|DirectDiscountDraftCollection
     */
    public function getDiscounts();

    /**
     * @param ?DirectDiscountDraftCollection $discounts
     */
    public function setDiscounts(?DirectDiscountDraftCollection $discounts): void;
}
