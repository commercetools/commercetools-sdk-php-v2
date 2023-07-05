<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CartDiscountChangeIsActiveAction extends CartDiscountUpdateAction
{
    public const FIELD_IS_ACTIVE = 'isActive';

    /**
     * <p>New value to set.
     * If set to <code>true</code>, the Discount will be applied to the Cart.</p>
     * <p>If the limit for active Cart Discounts is reached, a <a href="ctp:api:type:MaxCartDiscountsReachedError">MaxCartDiscountsReached</a> error is returned.</p>
     *

     * @return null|bool
     */
    public function getIsActive();

    /**
     * @param ?bool $isActive
     */
    public function setIsActive(?bool $isActive): void;
}
