<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CartDiscountValueRelative extends CartDiscountValue
{
    public const FIELD_PERMYRIAD = 'permyriad';

    /**
     * <p>Fraction (per ten thousand) the price is reduced by. For example, <code>1000</code> will result in a 10% price reduction.</p>
     *

     * @return null|int
     */
    public function getPermyriad();

    /**
     * @param ?int $permyriad
     */
    public function setPermyriad(?int $permyriad): void;
}
