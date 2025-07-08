<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurringOrder;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface RecurringOrderSetStateAction extends RecurringOrderUpdateAction
{
    public const FIELD_RECURRING_ORDER_STATE = 'recurringOrderState';

    /**
     * <p>New state of the RecurringOrder.</p>
     *

     * @return null|RecurringOrderStateDraft
     */
    public function getRecurringOrderState();

    /**
     * @param ?RecurringOrderStateDraft $recurringOrderState
     */
    public function setRecurringOrderState(?RecurringOrderStateDraft $recurringOrderState): void;
}
