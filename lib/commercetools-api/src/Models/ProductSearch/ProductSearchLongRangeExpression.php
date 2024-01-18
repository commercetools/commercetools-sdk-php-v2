<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductSearchLongRangeExpression extends ProductSearchQueryExpression
{
    public const FIELD_RANGE = 'range';

    /**

     * @return null|ProductSearchLongRangeValue
     */
    public function getRange();

    /**
     * @param ?ProductSearchLongRangeValue $range
     */
    public function setRange(?ProductSearchLongRangeValue $range): void;
}
