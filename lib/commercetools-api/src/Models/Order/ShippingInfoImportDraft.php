<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\ShippingMethod\ShippingMethodResourceIdentifier;
use Commercetools\Api\Models\ShippingMethod\ShippingRateDraft;
use Commercetools\Api\Models\TaxCategory\TaxCategoryResourceIdentifier;
use Commercetools\Api\Models\TaxCategory\TaxRate;
use Commercetools\Base\JsonObject;

interface ShippingInfoImportDraft extends JsonObject
{
    const FIELD_SHIPPING_METHOD_NAME = 'shippingMethodName';
    const FIELD_PRICE = 'price';
    const FIELD_SHIPPING_RATE = 'shippingRate';
    const FIELD_TAX_RATE = 'taxRate';
    const FIELD_TAX_CATEGORY = 'taxCategory';
    const FIELD_SHIPPING_METHOD = 'shippingMethod';
    const FIELD_DELIVERIES = 'deliveries';
    const FIELD_DISCOUNTED_PRICE = 'discountedPrice';
    const FIELD_SHIPPING_METHOD_STATE = 'shippingMethodState';

    /**
     * @return null|string
     */
    public function getShippingMethodName();

    /**
     * @return null|Money
     */
    public function getPrice();

    /**
     * <p>The shipping rate used to determine the price.</p>
     *
     * @return null|ShippingRateDraft
     */
    public function getShippingRate();

    /**
     * @return null|TaxRate
     */
    public function getTaxRate();

    /**
     * @return null|TaxCategoryResourceIdentifier
     */
    public function getTaxCategory();

    /**
     * <p>Not set if custom shipping method is used.</p>
     *
     * @return null|ShippingMethodResourceIdentifier
     */
    public function getShippingMethod();

    /**
     * <p>Deliveries are compilations of information on how the articles are being delivered to the customers.</p>
     *
     * @return null|DeliveryCollection
     */
    public function getDeliveries();

    /**
     * @return null|DiscountedLineItemPriceDraft
     */
    public function getDiscountedPrice();

    /**
     * <p>Indicates whether the ShippingMethod referenced is allowed for the cart or not.</p>
     *
     * @return null|string
     */
    public function getShippingMethodState();

    public function setShippingMethodName(?string $shippingMethodName): void;

    public function setPrice(?Money $price): void;

    public function setShippingRate(?ShippingRateDraft $shippingRate): void;

    public function setTaxRate(?TaxRate $taxRate): void;

    public function setTaxCategory(?TaxCategoryResourceIdentifier $taxCategory): void;

    public function setShippingMethod(?ShippingMethodResourceIdentifier $shippingMethod): void;

    public function setDeliveries(?DeliveryCollection $deliveries): void;

    public function setDiscountedPrice(?DiscountedLineItemPriceDraft $discountedPrice): void;

    public function setShippingMethodState(?string $shippingMethodState): void;
}
