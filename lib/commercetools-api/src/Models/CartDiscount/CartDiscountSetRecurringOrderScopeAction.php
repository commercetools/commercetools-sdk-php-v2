<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Api\Models\RecurringOrder\RecurringOrderScopeDraft;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CartDiscountSetRecurringOrderScopeAction extends CartDiscountUpdateAction
{
    public const FIELD_RECURRING_ORDER_SCOPE = 'recurringOrderScope';

    /**
     * <p>Scope of the Cart Discount for Recurring Orders.</p>
     *

     * @return null|RecurringOrderScopeDraft
     */
    public function getRecurringOrderScope();

    /**
     * @param ?RecurringOrderScopeDraft $recurringOrderScope
     */
    public function setRecurringOrderScope(?RecurringOrderScopeDraft $recurringOrderScope): void;
}
