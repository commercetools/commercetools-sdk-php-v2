<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface HighPrecisionMoney extends TypedMoney
{

    public const FIELD_PRECISE_AMOUNT = 'preciseAmount';

    /**
     * @return null|int
     */
    public function getPreciseAmount();

    public function setPreciseAmount(?int $preciseAmount): void;
}
