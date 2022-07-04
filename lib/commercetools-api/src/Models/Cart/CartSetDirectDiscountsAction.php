<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CartSetDirectDiscountsAction extends CartUpdateAction
{
    public const FIELD_DISCOUNTS = 'discounts';

    /**
     * @return null|DirectDiscountDraftCollection
     */
    public function getDiscounts();

    /**
     * @param ?DirectDiscountDraftCollection $discounts
     */
    public function setDiscounts(?DirectDiscountDraftCollection $discounts): void;
}
