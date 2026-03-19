<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurringOrder;

use Commercetools\Api\Models\RecurrencePolicy\RecurrencePolicyReferenceCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ApplicableRecurrencePolicies extends RecurringOrderScope
{
    public const FIELD_RECURRENCE_POLICIES = 'recurrencePolicies';

    /**

     * @return null|string
     */
    public function getType();

    /**
     * <p>Recurrence Policies for which the Cart Discount is valid.</p>
     *

     * @return null|RecurrencePolicyReferenceCollection
     */
    public function getRecurrencePolicies();

    /**
     * @param ?RecurrencePolicyReferenceCollection $recurrencePolicies
     */
    public function setRecurrencePolicies(?RecurrencePolicyReferenceCollection $recurrencePolicies): void;
}
