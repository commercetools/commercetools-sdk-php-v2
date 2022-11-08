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

interface StagedOrderSetLineItemTaxAmountAction extends StagedOrderUpdateAction
{
    public const FIELD_LINE_ITEM_ID = 'lineItemId';
    public const FIELD_EXTERNAL_TAX_AMOUNT = 'externalTaxAmount';
    public const FIELD_SHIPPING_KEY = 'shippingKey';

    /**

     * @return null|string
     */
    public function getLineItemId();

    /**

     * @return null|ExternalTaxAmountDraft
     */
    public function getExternalTaxAmount();

    /**
     * <p><code>key</code> of the <a href="ctp:api:type:ShippingMethod">ShippingMethod</a> used for this Line Item.```
     * This is required for Carts with <code>Multiple</code> <a href="ctp:api:type:ShippingMode">ShippingMode</a>.</p>
     *

     * @return null|string
     */
    public function getShippingKey();

    /**
     * @param ?string $lineItemId
     */
    public function setLineItemId(?string $lineItemId): void;

    /**
     * @param ?ExternalTaxAmountDraft $externalTaxAmount
     */
    public function setExternalTaxAmount(?ExternalTaxAmountDraft $externalTaxAmount): void;

    /**
     * @param ?string $shippingKey
     */
    public function setShippingKey(?string $shippingKey): void;
}
