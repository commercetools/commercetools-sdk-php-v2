<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurrencePolicy;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface RecurrencePolicySetMinDaysBetweenOrdersAction extends RecurrencePolicyUpdateAction
{
    public const FIELD_MIN_DAYS_BETWEEN_ORDERS = 'minDaysBetweenOrders';

    /**
     * <p>Value to set. Must be greater than <code>0</code>.
     * If omitted, any existing value is removed and there is no limit.</p>
     *

     * @return null|int
     */
    public function getMinDaysBetweenOrders();

    /**
     * @param ?int $minDaysBetweenOrders
     */
    public function setMinDaysBetweenOrders(?int $minDaysBetweenOrders): void;
}
