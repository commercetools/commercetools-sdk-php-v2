<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\TypedMoney;
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

     * @return null|string
     */
    public function getShippingMethodName();

    /**
     * <p>Determined based on the ShippingRate and its tiered prices, and either the sum of LineItem prices or the <code>shippingRateInput</code> field.</p>
     *

     * @return null|TypedMoney
     */
    public function getPrice();

    /**
     * <p>The shipping rate used to determine the price.</p>
     *

     * @return null|ShippingRate
     */
    public function getShippingRate();

    /**
     * <p>Set once the <code>taxRate</code> is set.</p>
     *

     * @return null|TaxedItemPrice
     */
    public function getTaxedPrice();

    /**
     * <p>Will be set automatically in the <code>Platform</code> TaxMode once the shipping address is set is set.
     * For the <code>External</code> tax mode the tax rate has to be set explicitly with the ExternalTaxRateDraft.</p>
     *

     * @return null|TaxRate
     */
    public function getTaxRate();

    /**

     * @return null|TaxCategoryReference
     */
    public function getTaxCategory();

    /**
     * <p>Not set if custom shipping method is used.</p>
     *

     * @return null|ShippingMethodReference
     */
    public function getShippingMethod();

    /**
     * <p>Deliveries are compilations of information on how the articles are being delivered to the customers.</p>
     *

     * @return null|DeliveryCollection
     */
    public function getDeliveries();

    /**

     * @return null|DiscountedLineItemPrice
     */
    public function getDiscountedPrice();

    /**
     * <p>Indicates whether the ShippingMethod referenced in this ShippingInfo is allowed for the cart or not.</p>
     *

     * @return null|string
     */
    public function getShippingMethodState();

    /**
     * @param ?string $shippingMethodName
     */
    public function setShippingMethodName(?string $shippingMethodName): void;

    /**
     * @param ?TypedMoney $price
     */
    public function setPrice(?TypedMoney $price): void;

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
