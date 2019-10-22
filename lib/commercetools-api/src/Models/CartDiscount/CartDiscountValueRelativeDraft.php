<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

interface CartDiscountValueRelativeDraft extends CartDiscountValueDraft
{
    const FIELD_PERMYRIAD = 'permyriad';

    /**
     * @return null|int
     */
    public function getPermyriad();

    public function setPermyriad(?int $permyriad): void;
}
