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

interface RecurringOrderSetExpiresAtAction extends RecurringOrderUpdateAction
{
    public const FIELD_EXPIRES_AT = 'expiresAt';

    /**
     * <p>Date and time (UTC) the Recurring Order should expire. If empty, any existing value will be removed.</p>
     * <p>If the date or time is extended or removed when the <a href="ctp:api:type:RecurringOrderState">RecurringOrderState</a> is <code>Expired</code>, the state will be updated to <code>Active</code>.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getExpiresAt();

    /**
     * @param ?DateTimeImmutable $expiresAt
     */
    public function setExpiresAt(?DateTimeImmutable $expiresAt): void;
}
