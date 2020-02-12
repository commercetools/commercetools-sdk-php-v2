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
     * @return null|bool
     */
    public function getIsActive();

    public function setIsActive(?bool $isActive): void;
}
