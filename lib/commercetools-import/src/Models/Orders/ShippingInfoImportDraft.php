<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Orders;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\Common\ShippingMethodKeyReference;
use Commercetools\Import\Models\Common\TaxCategoryKeyReference;
use Commercetools\Import\Models\Common\TypedMoney;
use Commercetools\Import\Models\Prices\TaxRate;

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
     * <p>Maps to <code>shippingInfo.shippingMethodName</code>.</p>
     *

     * @return null|string
     */
    public function getShippingMethodName();

    /**
     * <p>Maps to <code>shippingInfo.price</code>.</p>
     *

     * @return null|TypedMoney
     */
    public function getPrice();

    /**
     * <p>Used to determine the price.</p>
     *

     * @return null|ShippingRateDraft
     */
    public function getShippingRate();

    /**
     * <p>Maps to <code>shippingInfo.taxRate</code>.</p>
     *

     * @return null|TaxRate
     */
    public function getTaxRate();

    /**
     * <p>Maps to <code>shippingInfo.taxCategory</code>. If the referenced <a href="ctp:api:type:TaxCategory">TaxCategory</a> does not exist, the <code>state</code> of the <a href="ctp:import:type:ImportOperation">ImportOperation</a> will be set to <code>unresolved</code> until the referenced TaxCategory is created.</p>
     *

     * @return null|TaxCategoryKeyReference
     */
    public function getTaxCategory();

    /**
     * <p>Maps to <code>shippingInfo.shippingMethod</code>. If the referenced <a href="ctp:api:type:ShippingMethod">ShippingMethod</a> does not exist, the <code>state</code> of the <a href="ctp:import:type:ImportOperation">ImportOperation</a> will be set to <code>unresolved</code> until the referenced ShippingMethod is created.</p>
     *

     * @return null|ShippingMethodKeyReference
     */
    public function getShippingMethod();

    /**
     * <p>Maps to <code>shippingInfo.deliveries</code>. You cannot add a <code>DeliveryItem</code> on import, as <code>LineItems</code> and <code>CustomLineItems</code> are not yet referenceable by an <code>id</code>.</p>
     *

     * @return null|DeliveryCollection
     */
    public function getDeliveries();

    /**
     * <p>Maps to <code>shippingInfo.discountedPrice</code>.</p>
     *

     * @return null|DiscountedLineItemPriceDraft
     */
    public function getDiscountedPrice();

    /**
     * <p>Maps to <code>shippingInfo.shippingMethodState</code>.</p>
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
     * @param ?ShippingRateDraft $shippingRate
     */
    public function setShippingRate(?ShippingRateDraft $shippingRate): void;

    /**
     * @param ?TaxRate $taxRate
     */
    public function setTaxRate(?TaxRate $taxRate): void;

    /**
     * @param ?TaxCategoryKeyReference $taxCategory
     */
    public function setTaxCategory(?TaxCategoryKeyReference $taxCategory): void;

    /**
     * @param ?ShippingMethodKeyReference $shippingMethod
     */
    public function setShippingMethod(?ShippingMethodKeyReference $shippingMethod): void;

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
