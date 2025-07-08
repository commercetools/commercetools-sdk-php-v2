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
 * @implements Builder<StandardSchedule>
 */
final class StandardScheduleBuilder implements Builder
{
    /**

     * @var ?int
     */
    private $value;

    /**

     * @var ?string
     */
    private $intervalUnit;

    /**
     * <p>Number of intervals between orders.</p>
     *

     * @return null|int
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * <p>Interval of this schedule.</p>
     *

     * @return null|string
     */
    public function getIntervalUnit()
    {
        return $this->intervalUnit;
    }

    /**
     * @param ?int $value
     * @return $this
     */
    public function withValue(?int $value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @param ?string $intervalUnit
     * @return $this
     */
    public function withIntervalUnit(?string $intervalUnit)
    {
        $this->intervalUnit = $intervalUnit;

        return $this;
    }


    public function build(): StandardSchedule
    {
        return new StandardScheduleModel(
            $this->value,
            $this->intervalUnit
        );
    }

    public static function of(): StandardScheduleBuilder
    {
        return new self();
    }
}
