<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Cart\ExternalTaxAmountDraft;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StagedOrderSetCustomLineItemTaxAmountAction extends StagedOrderUpdateAction
{
    public const FIELD_CUSTOM_LINE_ITEM_ID = 'customLineItemId';
    public const FIELD_CUSTOM_LINE_ITEM_KEY = 'customLineItemKey';
    public const FIELD_EXTERNAL_TAX_AMOUNT = 'externalTaxAmount';

    /**
     * <p><code>id</code> of the <a href="ctp:api:type:CustomLineItem">CustomLineItem</a> to update. Either <code>customLineItemId</code> or <code>customLineItemKey</code> is required.</p>
     *

     * @return null|string
     */
    public function getCustomLineItemId();

    /**
     * <p><code>key</code> of the <a href="ctp:api:type:CustomLineItem">CustomLineItem</a> to update. Either <code>customLineItemId</code> or <code>customLineItemKey</code> is required.</p>
     *

     * @return null|string
     */
    public function getCustomLineItemKey();

    /**
     * <p>Value to set.
     * If empty, any existing value is removed.</p>
     *

     * @return null|ExternalTaxAmountDraft
     */
    public function getExternalTaxAmount();

    /**
     * @param ?string $customLineItemId
     */
    public function setCustomLineItemId(?string $customLineItemId): void;

    /**
     * @param ?string $customLineItemKey
     */
    public function setCustomLineItemKey(?string $customLineItemKey): void;

    /**
     * @param ?ExternalTaxAmountDraft $externalTaxAmount
     */
    public function setExternalTaxAmount(?ExternalTaxAmountDraft $externalTaxAmount): void;
}
