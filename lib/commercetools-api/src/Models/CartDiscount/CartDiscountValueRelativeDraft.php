<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CartDiscountValueRelativeDraft extends CartDiscountValueDraft
{
    public const FIELD_PERMYRIAD = 'permyriad';

    /**
     * @return null|int
     */
    public function getPermyriad();

    /**
     * @param ?int $permyriad
     */
    public function setPermyriad(?int $permyriad): void;
}
