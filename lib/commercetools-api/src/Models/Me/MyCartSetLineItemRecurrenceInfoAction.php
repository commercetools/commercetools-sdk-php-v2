<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\RecurringOrder\LineItemRecurrenceInfoDraft;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface MyCartSetLineItemRecurrenceInfoAction extends MyCartUpdateAction
{
    public const FIELD_LINE_ITEM_ID = 'lineItemId';
    public const FIELD_LINE_ITEM_KEY = 'lineItemKey';
    public const FIELD_RECURRENCE_INFO = 'recurrenceInfo';

    /**
     * <p><code>id</code> of the <a href="ctp:api:type:LineItem">LineItem</a> to update. Either <code>lineItemId</code> or <code>lineItemKey</code> is required.</p>
     *

     * @return null|string
     */
    public function getLineItemId();

    /**
     * <p><code>key</code> of the <a href="ctp:api:type:LineItem">LineItem</a> to update. Either <code>lineItemId</code> or <code>lineItemKey</code> is required.</p>
     *

     * @return null|string
     */
    public function getLineItemKey();

    /**
     * <p>Value to set.
     * If empty, any existing value will be removed.</p>
     *

     * @return null|LineItemRecurrenceInfoDraft
     */
    public function getRecurrenceInfo();

    /**
     * @param ?string $lineItemId
     */
    public function setLineItemId(?string $lineItemId): void;

    /**
     * @param ?string $lineItemKey
     */
    public function setLineItemKey(?string $lineItemKey): void;

    /**
     * @param ?LineItemRecurrenceInfoDraft $recurrenceInfo
     */
    public function setRecurrenceInfo(?LineItemRecurrenceInfoDraft $recurrenceInfo): void;
}
