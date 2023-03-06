<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\CentPrecisionMoney;
use Commercetools\Api\Models\Order\DeliveryCollection;
use Commercetools\Api\Models\ShippingMethod\ShippingMethodReference;
use Commercetools\Api\Models\ShippingMethod\ShippingRate;
use Commercetools\Api\Models\TaxCategory\TaxCategoryReference;
use Commercetools\Api\Models\TaxCategory\TaxRate;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ShippingInfo extends JsonObject
{
    public const FIELD_SHIPPING_METHOD_NAME = 'shippingMethodName';
    public const FIELD_PRICE = 'price';
    public const FIELD_SHIPPING_RATE = 'shippingRate';
    public const FIELD_TAXED_PRICE = 'taxedPrice';
    public const FIELD_TAX_RATE = 'taxRate';
    public const FIELD_TAX_CATEGORY = 'taxCategory';
    public const FIELD_SHIPPING_METHOD = 'shippingMethod';
    public const FIELD_DELIVERIES = 'deliveries';
    public const FIELD_DISCOUNTED_PRICE = 'discountedPrice';
    public const FIELD_SHIPPING_METHOD_STATE = 'shippingMethodState';

    /**
     * <p>Name of the Shipping Method.</p>
     *

     * @return null|string
     */
    public function getShippingMethodName();

    /**
     * <p>Determined based on the <a href="ctp:api:type:ShippingRate">ShippingRate</a> and its tiered prices, and either the sum of <a href="ctp:api:type:LineItem">LineItem</a> prices or the <code>shippingRateInput</code> field.</p>
     *

     * @return null|CentPrecisionMoney
     */
    public function getPrice();

    /**
     * <p>Used to determine the price.</p>
     *

     * @return null|ShippingRate
     */
    public function getShippingRate();

    /**
     * <p>Automatically set after the <code>taxRate</code> is set.</p>
     *

     * @return null|TaxedItemPrice
     */
    public function getTaxedPrice();

    /**
     * <p>Automatically set in the <code>Platform</code> <a href="ctp:api:type:TaxMode">TaxMode</a> after the <a href="ctp:api:type:CartSetShippingAddressAction">shipping address is set</a>.</p>
     * <p>For the <code>External</code> <a href="ctp:api:type:TaxMode">TaxMode</a> the Tax Rate must be set explicitly with the <a href="ctp:api:type:ExternalTaxRateDraft">ExternalTaxRateDraft</a>.</p>
     *

     * @return null|TaxRate
     */
    public function getTaxRate();

    /**
     * <p>Used to select a Tax Rate when a Cart has the <code>Platform</code> <a href="ctp:api:type:TaxMode">TaxMode</a>.</p>
     *

     * @return null|TaxCategoryReference
     */
    public function getTaxCategory();

    /**
     * <p>Not set if a custom Shipping Method is used.</p>
     *

     * @return null|ShippingMethodReference
     */
    public function getShippingMethod();

    /**
     * <p>Information on how items are delivered to customers.</p>
     *

     * @return null|DeliveryCollection
     */
    public function getDeliveries();

    /**
     * <p>Discounted price of the Shipping Method.</p>
     *

     * @return null|DiscountedLineItemPrice
     */
    public function getDiscountedPrice();

    /**
     * <p>Indicates whether the <a href="ctp:api:type:ShippingMethod">ShippingMethod</a> referenced in this ShippingInfo is allowed for the Cart.</p>
     *

     * @return null|string
     */
    public function getShippingMethodState();

    /**
     * @param ?string $shippingMethodName
     */
    public function setShippingMethodName(?string $shippingMethodName): void;

    /**
     * @param ?CentPrecisionMoney $price
     */
    public function setPrice(?CentPrecisionMoney $price): void;

    /**
     * @param ?ShippingRate $shippingRate
     */
    public function setShippingRate(?ShippingRate $shippingRate): void;

    /**
     * @param ?TaxedItemPrice $taxedPrice
     */
    public function setTaxedPrice(?TaxedItemPrice $taxedPrice): void;

    /**
     * @param ?TaxRate $taxRate
     */
    public function setTaxRate(?TaxRate $taxRate): void;

    /**
     * @param ?TaxCategoryReference $taxCategory
     */
    public function setTaxCategory(?TaxCategoryReference $taxCategory): void;

    /**
     * @param ?ShippingMethodReference $shippingMethod
     */
    public function setShippingMethod(?ShippingMethodReference $shippingMethod): void;

    /**
     * @param ?DeliveryCollection $deliveries
     */
    public function setDeliveries(?DeliveryCollection $deliveries): void;

    /**
     * @param ?DiscountedLineItemPrice $discountedPrice
     */
    public function setDiscountedPrice(?DiscountedLineItemPrice $discountedPrice): void;

    /**
     * @param ?string $shippingMethodState
     */
    public function setShippingMethodState(?string $shippingMethodState): void;
}
