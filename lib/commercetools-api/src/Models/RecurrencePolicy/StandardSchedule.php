<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurrencePolicy;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StandardSchedule extends RecurrencePolicySchedule
{
    public const FIELD_VALUE = 'value';
    public const FIELD_INTERVAL_UNIT = 'intervalUnit';

    /**
     * <p>Number of intervals between orders.</p>
     *

     * @return null|int
     */
    public function getValue();

    /**
     * <p>Interval of this schedule.</p>
     *

     * @return null|string
     */
    public function getIntervalUnit();

    /**
     * @param ?int $value
     */
    public function setValue(?int $value): void;

    /**
     * @param ?string $intervalUnit
     */
    public function setIntervalUnit(?string $intervalUnit): void;
}
