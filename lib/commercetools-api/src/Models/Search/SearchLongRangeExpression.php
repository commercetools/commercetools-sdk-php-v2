<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Search;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface SearchLongRangeExpression extends SearchQueryExpression
{
    public const FIELD_RANGE = 'range';

    /**

     * @return null|SearchLongRangeValue
     */
    public function getRange();

    /**
     * @param ?SearchLongRangeValue $range
     */
    public function setRange(?SearchLongRangeValue $range): void;
}
