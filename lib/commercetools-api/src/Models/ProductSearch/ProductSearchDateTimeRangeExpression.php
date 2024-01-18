<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductSearchDateTimeRangeExpression extends ProductSearchQueryExpression
{
    public const FIELD_RANGE = 'range';

    /**

     * @return null|ProductSearchDateTimeRangeValue
     */
    public function getRange();

    /**
     * @param ?ProductSearchDateTimeRangeValue $range
     */
    public function setRange(?ProductSearchDateTimeRangeValue $range): void;
}
