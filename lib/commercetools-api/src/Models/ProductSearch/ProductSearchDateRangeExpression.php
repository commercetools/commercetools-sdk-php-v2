<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductSearchDateRangeExpression extends ProductSearchQueryExpression
{
    public const FIELD_RANGE = 'range';

    /**

     * @return null|ProductSearchDateRangeValue
     */
    public function getRange();

    /**
     * @param ?ProductSearchDateRangeValue $range
     */
    public function setRange(?ProductSearchDateRangeValue $range): void;
}
