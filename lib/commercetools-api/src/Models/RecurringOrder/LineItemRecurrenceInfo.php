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

interface LineItemRecurrenceInfo extends JsonObject
{
    public const FIELD_RECURRENCE_POLICY = 'recurrencePolicy';
    public const FIELD_PRICE_SELECTION_MODE = 'priceSelectionMode';

    /**
     * <p><a href="ctp:api:type:Reference">Reference</a> to a RecurrencePolicy.</p>
     *

     * @return null|RecurrencePolicyReference
     */
    public function getRecurrencePolicy();

    /**
     * <p>Indicates how the price of a line item will be selected during order creation.</p>
     *

     * @return null|string
     */
    public function getPriceSelectionMode();

    /**
     * @param ?RecurrencePolicyReference $recurrencePolicy
     */
    public function setRecurrencePolicy(?RecurrencePolicyReference $recurrencePolicy): void;

    /**
     * @param ?string $priceSelectionMode
     */
    public function setPriceSelectionMode(?string $priceSelectionMode): void;
}
