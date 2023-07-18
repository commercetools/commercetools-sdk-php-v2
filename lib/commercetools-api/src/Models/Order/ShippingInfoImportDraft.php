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
     * <p>Name of the Shipping Method.</p>
     *

     * @return null|string
     */
    public function getShippingMethodName();

    /**
     * <p>The base price for the Shipping Method.</p>
     *

     * @return null|Money
     */
    public function getPrice();

    /**
     * <p>Shipping rate information for the Order.</p>
     *

     * @return null|ShippingRateDraft
     */
    public function getShippingRate();

    /**
     * <p>Include a Tax Rate for the Shipping Method.</p>
     *

     * @return null|TaxRate
     */
    public function getTaxRate();

    /**
     * <p>Include a value to associate a Tax Category with the shipping information.</p>
     *

     * @return null|TaxCategoryResourceIdentifier
     */
    public function getTaxCategory();

    /**
     * <p>Include a value to associate a Shipping Method with the Order.</p>
     *

     * @return null|ShippingMethodResourceIdentifier
     */
    public function getShippingMethod();

    /**
     * <p>Information on how items are to be delivered to customers.</p>
     *

     * @return null|DeliveryDraftCollection
     */
    public function getDeliveries();

    /**
     * <p>Discounted Price of the Shipping Method.</p>
     *

     * @return null|DiscountedLineItemPriceDraft
     */
    public function getDiscountedPrice();

    /**
     * <p>Indicates if the <a href="ctp:api:type:ShippingMethod">ShippingMethod</a> referenced is allowed for the Order or not.</p>
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
     * @param ?DeliveryDraftCollection $deliveries
     */
    public function setDeliveries(?DeliveryDraftCollection $deliveries): void;

    /**
     * @param ?DiscountedLineItemPriceDraft $discountedPrice
     */
    public function setDiscountedPrice(?DiscountedLineItemPriceDraft $discountedPrice): void;

    /**
     * @param ?string $shippingMethodState
     */
    public function setShippingMethodState(?string $shippingMethodState): void;
}
