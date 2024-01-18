<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductSearchNumberRangeExpression extends ProductSearchQueryExpression
{
    public const FIELD_RANGE = 'range';

    /**

     * @return null|ProductSearchNumberRangeValue
     */
    public function getRange();

    /**
     * @param ?ProductSearchNumberRangeValue $range
     */
    public function setRange(?ProductSearchNumberRangeValue $range): void;
}
