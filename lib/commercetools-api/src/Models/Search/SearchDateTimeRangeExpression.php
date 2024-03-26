<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Search;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface SearchDateTimeRangeExpression extends SearchQueryExpression
{
    public const FIELD_RANGE = 'range';

    /**

     * @return null|SearchDateTimeRangeValue
     */
    public function getRange();

    /**
     * @param ?SearchDateTimeRangeValue $range
     */
    public function setRange(?SearchDateTimeRangeValue $range): void;
}
