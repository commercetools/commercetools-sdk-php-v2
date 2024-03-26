<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Search;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface SearchNumberRangeExpression extends SearchQueryExpression
{
    public const FIELD_RANGE = 'range';

    /**

     * @return null|SearchNumberRangeValue
     */
    public function getRange();

    /**
     * @param ?SearchNumberRangeValue $range
     */
    public function setRange(?SearchNumberRangeValue $range): void;
}
