<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CartSetShippingMethodTaxAmountAction extends CartUpdateAction
{
    public const FIELD_SHIPPING_KEY = 'shippingKey';
    public const FIELD_EXTERNAL_TAX_AMOUNT = 'externalTaxAmount';

    /**
     * <p><code>key</code> of the <a href="ctp:api:type:ShippingMethod">ShippingMethod</a> to update. This is required for Carts with <code>Multiple</code> <a href="ctp:api:type:ShippingMode">ShippingMode</a>.</p>
     *

     * @return null|string
     */
    public function getShippingKey();

    /**
     * <p>Value to set.
     * If empty, any existing value is removed.</p>
     *

     * @return null|ExternalTaxAmountDraft
     */
    public function getExternalTaxAmount();

    /**
     * @param ?string $shippingKey
     */
    public function setShippingKey(?string $shippingKey): void;

    /**
     * @param ?ExternalTaxAmountDraft $externalTaxAmount
     */
    public function setExternalTaxAmount(?ExternalTaxAmountDraft $externalTaxAmount): void;
}
