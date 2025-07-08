<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurringOrder;

use Commercetools\Api\Models\RecurrencePolicy\RecurrencePolicyResourceIdentifier;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CustomLineItemRecurrenceInfoDraft extends JsonObject
{
    public const FIELD_RECURRENCE_POLICY = 'recurrencePolicy';

    /**
     * <p><a href="ctp:api:type:ResourceIdentifier">ResourceIdentifier</a> to a RecurrencePolicy.</p>
     *

     * @return null|RecurrencePolicyResourceIdentifier
     */
    public function getRecurrencePolicy();

    /**
     * @param ?RecurrencePolicyResourceIdentifier $recurrencePolicy
     */
    public function setRecurrencePolicy(?RecurrencePolicyResourceIdentifier $recurrencePolicy): void;
}
