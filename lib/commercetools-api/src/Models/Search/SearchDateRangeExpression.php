<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Search;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface SearchDateRangeExpression extends SearchQueryExpression
{
    public const FIELD_RANGE = 'range';

    /**

     * @return null|SearchDateRangeValue
     */
    public function getRange();

    /**
     * @param ?SearchDateRangeValue $range
     */
    public function setRange(?SearchDateRangeValue $range): void;
}
