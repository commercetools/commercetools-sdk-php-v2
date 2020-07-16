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
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ShippingInfoImportDraft extends JsonObject
{
    public const FIELD_SHIPPING_METHOD_NAME = 'shippingMethodName';
    public const FIELD_PRICE = 'price';
    public const FIELD_SHIPPING_RATE = 'shippingRate';
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

    /**
     * @param ?string $shippingMethodName
     */
    public function setShippingMethodName(?string $shippingMethodName): void;

    /**
     * @param ?Money $price
     */
    public function setPrice(?Money $price): void;

    /**
     * @param ?ShippingRateDraft $shippingRate
     */
    public function setShippingRate(?ShippingRateDraft $shippingRate): void;

    /**
     * @param ?TaxRate $taxRate
     */
    public function setTaxRate(?TaxRate $taxRate): void;

    /**
     * @param ?TaxCategoryResourceIdentifier $taxCategory
     */
    public function setTaxCategory(?TaxCategoryResourceIdentifier $taxCategory): void;

    /**
     * @param ?ShippingMethodResourceIdentifier $shippingMethod
     */
    public function setShippingMethod(?ShippingMethodResourceIdentifier $shippingMethod): void;

    /**
     * @param ?DeliveryCollection $deliveries
     */
    public function setDeliveries(?DeliveryCollection $deliveries): void;

    /**
     * @param ?DiscountedLineItemPriceDraft $discountedPrice
     */
    public function setDiscountedPrice(?DiscountedLineItemPriceDraft $discountedPrice): void;

    /**
     * @param ?string $shippingMethodState
     */
    public function setShippingMethodState(?string $shippingMethodState): void;
}
