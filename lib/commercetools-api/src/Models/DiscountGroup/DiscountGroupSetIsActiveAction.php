<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\DiscountGroup;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface DiscountGroupSetIsActiveAction extends DiscountGroupUpdateAction
{
    public const FIELD_IS_ACTIVE = 'isActive';

    /**
     * <p>New value to set.</p>
     * <p>A DiscountGroup must be active for its CartDiscounts to be considered during discount application.</p>
     *

     * @return null|bool
     */
    public function getIsActive();

    /**
     * @param ?bool $isActive
     */
    public function setIsActive(?bool $isActive): void;
}
