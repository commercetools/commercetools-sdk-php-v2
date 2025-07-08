<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurrencePolicy;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<DayOfMonthScheduleDraft>
 */
final class DayOfMonthScheduleDraftBuilder implements Builder
{
    /**

     * @var ?int
     */
    private $day;

    /**
     * <p>The day of the month when the <a href="ctp:api:type:RecurringOrder">Recurring Order</a> should be created.
     * If the value is greater than the number of days in a given month, the order will be created on the last day of the month.</p>
     *

     * @return null|int
     */
    public function getDay()
    {
        return $this->day;
    }

    /**
     * @param ?int $day
     * @return $this
     */
    public function withDay(?int $day)
    {
        $this->day = $day;

        return $this;
    }


    public function build(): DayOfMonthScheduleDraft
    {
        return new DayOfMonthScheduleDraftModel(
            $this->day
        );
    }

    public static function of(): DayOfMonthScheduleDraftBuilder
    {
        return new self();
    }
}
