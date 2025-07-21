<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\RecurringOrder\RecurringOrder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface RecurringOrderDeletedMessagePayload extends MessagePayload
{
    public const FIELD_RECURRING_ORDER = 'recurringOrder';

    /**
     * <p><a href="ctp:api:type:RecurringOrder">RecurringOrder</a> that was deleted.</p>
     *

     * @return null|RecurringOrder
     */
    public function getRecurringOrder();

    /**
     * @param ?RecurringOrder $recurringOrder
     */
    public function setRecurringOrder(?RecurringOrder $recurringOrder): void;
}
