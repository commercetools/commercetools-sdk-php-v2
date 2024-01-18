<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductSearchTimeRangeExpression extends ProductSearchQueryExpression
{
    public const FIELD_RANGE = 'range';

    /**

     * @return null|ProductSearchTimeRangeValue
     */
    public function getRange();

    /**
     * @param ?ProductSearchTimeRangeValue $range
     */
    public function setRange(?ProductSearchTimeRangeValue $range): void;
}
