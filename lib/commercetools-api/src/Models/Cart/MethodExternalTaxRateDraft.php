<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface MethodExternalTaxRateDraft extends JsonObject
{
    public const FIELD_SHIPPING_METHOD_KEY = 'shippingMethodKey';
    public const FIELD_TAX_RATE = 'taxRate';

    /**
     * <p>User-defined unique identifier of the Shipping Method in a Cart with <code>Multiple</code> <a href="ctp:api:type:ShippingMode">ShippingMode</a>.</p>
     *

     * @return null|string
     */
    public function getShippingMethodKey();

    /**
     * <p>External Tax Rate for the Shipping Method, if the Cart has <code>External</code> <a href="ctp:api:type:TaxMode">TaxMode</a>.</p>
     *

     * @return null|ExternalTaxRateDraft
     */
    public function getTaxRate();

    /**
     * @param ?string $shippingMethodKey
     */
    public function setShippingMethodKey(?string $shippingMethodKey): void;

    /**
     * @param ?ExternalTaxRateDraft $taxRate
     */
    public function setTaxRate(?ExternalTaxRateDraft $taxRate): void;
}
