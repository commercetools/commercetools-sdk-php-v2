<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\BaseAddress;
use Commercetools\Api\Models\Order\DeliveryCollection;
use Commercetools\Api\Models\ShippingMethod\ShippingMethodReference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CartAddShippingMethodAction extends CartUpdateAction
{
    public const FIELD_SHIPPING_KEY = 'shippingKey';
    public const FIELD_SHIPPING_METHOD = 'shippingMethod';
    public const FIELD_SHIPPING_ADDRESS = 'shippingAddress';
    public const FIELD_SHIPPING_RATE_INPUT = 'shippingRateInput';
    public const FIELD_EXTERNAL_TAX_RATE = 'externalTaxRate';
    public const FIELD_DELIVERIES = 'deliveries';
    public const FIELD_CUSTOM = 'custom';

    /**
     * <p>User-defined unique identifier of the Shipping Method in a Cart with <code>Multi</code> <a href="ctp:api:type:ShippingMode">ShippingMode</a>.</p>
     *

     * @return null|string
     */
    public function getShippingKey();

    /**
     * <p>Value to set.
     * If empty, any existing value is removed.</p>
     *

     * @return null|ShippingMethodReference
     */
    public function getShippingMethod();

    /**
     * <p>Determines the shipping rate and Tax Rate of the Line Items.</p>
     *

     * @return null|BaseAddress
     */
    public function getShippingAddress();

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
     * <p>Tax Rate used to tax a shipping expense if a Cart has the <code>External</code> <a href="ctp:api:type:TaxMode">TaxMode</a>.</p>
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
     * <p>Custom Fields for the Shipping Method.</p>
     *

     * @return null|string
     */
    public function getCustom();

    /**
     * @param ?string $shippingKey
     */
    public function setShippingKey(?string $shippingKey): void;

    /**
     * @param ?ShippingMethodReference $shippingMethod
     */
    public function setShippingMethod(?ShippingMethodReference $shippingMethod): void;

    /**
     * @param ?BaseAddress $shippingAddress
     */
    public function setShippingAddress(?BaseAddress $shippingAddress): void;

    /**
     * @param ?ShippingRateInputDraft $shippingRateInput
     */
    public function setShippingRateInput(?ShippingRateInputDraft $shippingRateInput): void;

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
