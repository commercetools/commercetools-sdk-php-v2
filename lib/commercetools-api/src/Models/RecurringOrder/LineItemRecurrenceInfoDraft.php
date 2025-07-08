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

interface LineItemRecurrenceInfoDraft extends JsonObject
{
    public const FIELD_RECURRENCE_POLICY = 'recurrencePolicy';
    public const FIELD_PRICE_SELECTION_MODE = 'priceSelectionMode';

    /**
     * <p><a href="ctp:api:type:ResourceIdentifier">ResourceIdentifier</a> to a RecurrencePolicy.</p>
     *

     * @return null|RecurrencePolicyResourceIdentifier
     */
    public function getRecurrencePolicy();

    /**
     * <p>Determines how the price of a line item will be selected during order creation.</p>
     *

     * @return null|string
     */
    public function getPriceSelectionMode();

    /**
     * @param ?RecurrencePolicyResourceIdentifier $recurrencePolicy
     */
    public function setRecurrencePolicy(?RecurrencePolicyResourceIdentifier $recurrencePolicy): void;

    /**
     * @param ?string $priceSelectionMode
     */
    public function setPriceSelectionMode(?string $priceSelectionMode): void;
}
