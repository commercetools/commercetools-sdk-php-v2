<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderSearchLongRangeExpression extends OrderSearchQueryExpression
{
    public const FIELD_RANGE = 'range';

    /**

     * @return null|OrderSearchLongRangeValue
     */
    public function getRange();

    /**
     * @param ?OrderSearchLongRangeValue $range
     */
    public function setRange(?OrderSearchLongRangeValue $range): void;
}
