<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\DiscountCode;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface DiscountCodeChangeIsActiveAction extends DiscountCodeUpdateAction
{
    public const FIELD_IS_ACTIVE = 'isActive';

    /**
     * <p>New value to set. Set to <code>true</code> to activate the DiscountCode for all matching Discounts.</p>
     *

     * @return null|bool
     */
    public function getIsActive();

    /**
     * @param ?bool $isActive
     */
    public function setIsActive(?bool $isActive): void;
}
