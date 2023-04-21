<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderSearchDateRangeExpression extends OrderSearchQueryExpression
{
    public const FIELD_RANGE = 'range';

    /**

     * @return null|OrderSearchDateRangeValue
     */
    public function getRange();

    /**
     * @param ?OrderSearchDateRangeValue $range
     */
    public function setRange(?OrderSearchDateRangeValue $range): void;
}
