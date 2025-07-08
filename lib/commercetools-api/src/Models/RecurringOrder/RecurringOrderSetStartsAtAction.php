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

interface RecurringOrderSetStartsAtAction extends RecurringOrderUpdateAction
{
    public const FIELD_STARTS_AT = 'startsAt';

    /**
     * <p>Date and time (UTC) the <a href="ctp:api:type:RecurringOrder">Recurring Order</a> should be started. The date and time must be in the future.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getStartsAt();

    /**
     * @param ?DateTimeImmutable $startsAt
     */
    public function setStartsAt(?DateTimeImmutable $startsAt): void;
}
