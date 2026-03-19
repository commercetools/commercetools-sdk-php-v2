<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurringOrder;

use Commercetools\Api\Models\RecurrencePolicy\RecurrencePolicyResourceIdentifierCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ApplicableRecurrencePoliciesDraft extends RecurringOrderScopeDraft
{
    public const FIELD_RECURRENCE_POLICIES = 'recurrencePolicies';

    /**

     * @return null|string
     */
    public function getType();

    /**
     * <p>Recurrence Policies for which the Cart Discount is valid.</p>
     * <p>If a Recurrence Policy does not exist, a <a href="ctp:api:type:ReferencedResourceNotFoundError">ReferencedResourceNotFound</a> error will be returned.</p>
     * <p>If fewer or more Recurrence Policies are provided, an <a href="ctp:api:type:InvalidOperationError">InvalidOperation</a> error will be returned.</p>
     *

     * @return null|RecurrencePolicyResourceIdentifierCollection
     */
    public function getRecurrencePolicies();

    /**
     * @param ?RecurrencePolicyResourceIdentifierCollection $recurrencePolicies
     */
    public function setRecurrencePolicies(?RecurrencePolicyResourceIdentifierCollection $recurrencePolicies): void;
}
