<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface MethodTaxedPrice extends JsonObject
{
    public const FIELD_SHIPPING_METHOD_KEY = 'shippingMethodKey';
    public const FIELD_TAXED_PRICE = 'taxedPrice';

    /**
     * <p>User-defined unique identifier of the <a href="ctp:api:type:ShippingMethod">Shipping Method</a> in a Cart with <code>Multiple</code> <a href="ctp:api:type:ShippingMode">ShippingMode</a>.</p>
     *

     * @return null|string
     */
    public function getShippingMethodKey();

    /**
     * <p>Total taxed price based on the quantity of the Line Item or Custom Line Item assigned to the Shipping Method identified by <code>shippingMethodKey</code>.</p>
     *

     * @return null|TaxedItemPrice
     */
    public function getTaxedPrice();

    /**
     * @param ?string $shippingMethodKey
     */
    public function setShippingMethodKey(?string $shippingMethodKey): void;

    /**
     * @param ?TaxedItemPrice $taxedPrice
     */
    public function setTaxedPrice(?TaxedItemPrice $taxedPrice): void;
}
