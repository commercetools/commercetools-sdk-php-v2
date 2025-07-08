<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurringOrder;

use Commercetools\Api\Models\RecurrencePolicy\RecurrencePolicyReference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CustomLineItemRecurrenceInfo extends JsonObject
{
    public const FIELD_RECURRENCE_POLICY = 'recurrencePolicy';

    /**
     * <p><a href="ctp:api:type:Reference">Reference</a> to a RecurrencePolicy.</p>
     *

     * @return null|RecurrencePolicyReference
     */
    public function getRecurrencePolicy();

    /**
     * @param ?RecurrencePolicyReference $recurrencePolicy
     */
    public function setRecurrencePolicy(?RecurrencePolicyReference $recurrencePolicy): void;
}
