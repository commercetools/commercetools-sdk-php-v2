<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use DateTimeImmutable;

interface CartDiscountSetValidUntilAction extends CartDiscountUpdateAction
{
    const FIELD_VALID_UNTIL = 'validUntil';

    /**
     * @return null|DateTimeImmutable
     */
    public function getValidUntil();

    public function setValidUntil(?DateTimeImmutable $validUntil): void;
}
