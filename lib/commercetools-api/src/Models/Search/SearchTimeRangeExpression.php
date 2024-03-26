<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Search;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface SearchTimeRangeExpression extends SearchQueryExpression
{
    public const FIELD_RANGE = 'range';

    /**

     * @return null|SearchTimeRangeValue
     */
    public function getRange();

    /**
     * @param ?SearchTimeRangeValue $range
     */
    public function setRange(?SearchTimeRangeValue $range): void;
}
