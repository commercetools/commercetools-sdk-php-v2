<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\BaseAddress;
use Commercetools\Api\Models\Order\DeliveryCollection;
use Commercetools\Api\Models\ShippingMethod\ShippingRateDraft;
use Commercetools\Api\Models\TaxCategory\TaxCategoryResourceIdentifier;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CustomShippingDraft extends JsonObject
{
    public const FIELD_KEY = 'key';
    public const FIELD_SHIPPING_METHOD_NAME = 'shippingMethodName';
    public const FIELD_SHIPPING_ADDRESS = 'shippingAddress';
    public const FIELD_SHIPPING_RATE = 'shippingRate';
    public const FIELD_SHIPPING_RATE_INPUT = 'shippingRateInput';
    public const FIELD_TAX_CATEGORY = 'taxCategory';
    public const FIELD_EXTERNAL_TAX_RATE = 'externalTaxRate';
    public const FIELD_DELIVERIES = 'deliveries';
    public const FIELD_CUSTOM = 'custom';

    /**
     * <p>User-defined unique identifier of the custom Shipping Method in a Cart with <code>Multi</code> <a href="ctp:api:type:ShippingMode">ShippingMode</a>.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>Name of the custom Shipping Method.</p>
     *

     * @return null|string
     */
    public function getShippingMethodName();

    /**
     * <p>Determines the shipping rate and Tax Rate of the associated Line Items.</p>
     *

     * @return null|BaseAddress
     */
    public function getShippingAddress();

    /**
     * <p>Determines the shipping price.</p>
     *

     * @return null|ShippingRateDraft
     */
    public function getShippingRate();

    /**
     * <p>Used as an input to select a <a href="ctp:api:type:ShippingRatePriceTier">ShippingRatePriceTier</a>.</p>
     * <ul>
     * <li>Must be <a href="ctp:api:type:ClassificationShippingRateInput">ClassificationShippingRateInput</a> if <a href="ctp:api:type:ShippingRateInputType">ShippingRateInputType</a> is <a href="ctp:api:type:CartClassificationType">CartClassificationType</a>.</li>
     * <li>Must be <a href="ctp:api:type:ScoreShippingRateInput">ScoreShippingRateInput</a> if <a href="ctp:api:type:ShippingRateInputType">ShippingRateInputType</a> is <a href="ctp:api:type:CartScoreType">CartScoreType</a>.</li>
     * </ul>
     * <p>The <code>shippingRateInput</code> cannot be set on the Cart if <a href="ctp:api:type:CartValueType">CartValueType</a> is defined.</p>
     *

     * @return null|ShippingRateInputDraft
     */
    public function getShippingRateInput();

    /**
     * <p>Tax Category used to determine a shipping Tax Rate if a Cart has the <code>Platform</code> <a href="ctp:api:type:TaxMode">TaxMode</a>.</p>
     *

     * @return null|TaxCategoryResourceIdentifier
     */
    public function getTaxCategory();

    /**
     * <p>Tax Rate used to tax a shipping expense if the Cart has the <code>External</code> <a href="ctp:api:type:TaxMode">TaxMode</a>.</p>
     *

     * @return null|string
     */
    public function getExternalTaxRate();

    /**
     * <p>Deliveries tied to a Shipping Method in a multi-shipping method Cart.
     * It holds information on how items are delivered to customers.</p>
     *

     * @return null|DeliveryCollection
     */
    public function getDeliveries();

    /**
     * <p>Custom Fields for the custom Shipping Method.</p>
     *

     * @return null|string
     */
    public function getCustom();

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?string $shippingMethodName
     */
    public function setShippingMethodName(?string $shippingMethodName): void;

    /**
     * @param ?BaseAddress $shippingAddress
     */
    public function setShippingAddress(?BaseAddress $shippingAddress): void;

    /**
     * @param ?ShippingRateDraft $shippingRate
     */
    public function setShippingRate(?ShippingRateDraft $shippingRate): void;

    /**
     * @param ?ShippingRateInputDraft $shippingRateInput
     */
    public function setShippingRateInput(?ShippingRateInputDraft $shippingRateInput): void;

    /**
     * @param ?TaxCategoryResourceIdentifier $taxCategory
     */
    public function setTaxCategory(?TaxCategoryResourceIdentifier $taxCategory): void;

    /**
     * @param ?string $externalTaxRate
     */
    public function setExternalTaxRate(?string $externalTaxRate): void;

    /**
     * @param ?DeliveryCollection $deliveries
     */
    public function setDeliveries(?DeliveryCollection $deliveries): void;

    /**
     * @param ?string $custom
     */
    public function setCustom(?string $custom): void;
}
