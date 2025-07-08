<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurringOrder;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface Counter extends SkipConfiguration
{
    public const FIELD_TOTAL_TO_SKIP = 'totalToSkip';
    public const FIELD_SKIPPED = 'skipped';
    public const FIELD_LAST_SKIPPED_AT = 'lastSkippedAt';

    /**
     * <p>Number of Orders that will be skipped.</p>
     *

     * @return null|int
     */
    public function getTotalToSkip();

    /**
     * <p>Number of Orders that were already skipped.</p>
     *

     * @return null|int
     */
    public function getSkipped();

    /**
     * <p>Date and time (UTC) when the last Order creation was skipped.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getLastSkippedAt();

    /**
     * @param ?int $totalToSkip
     */
    public function setTotalToSkip(?int $totalToSkip): void;

    /**
     * @param ?int $skipped
     */
    public function setSkipped(?int $skipped): void;

    /**
     * @param ?DateTimeImmutable $lastSkippedAt
     */
    public function setLastSkippedAt(?DateTimeImmutable $lastSkippedAt): void;
}
