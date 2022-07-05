<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Common;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface HighPrecisionMoney extends TypedMoney
{
    public const FIELD_PRECISE_AMOUNT = 'preciseAmount';

    /**

     * @return null|int
     */
    public function getPreciseAmount();

    /**
     * @param ?int $preciseAmount
     */
    public function setPreciseAmount(?int $preciseAmount): void;
}
