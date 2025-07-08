<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurringOrder;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CounterDraft extends SkipConfigurationDraft
{
    public const FIELD_TOTAL_TO_SKIP = 'totalToSkip';

    /**
     * <p>Number of Orders that will be skipped.</p>
     *

     * @return null|int
     */
    public function getTotalToSkip();

    /**
     * @param ?int $totalToSkip
     */
    public function setTotalToSkip(?int $totalToSkip): void;
}
