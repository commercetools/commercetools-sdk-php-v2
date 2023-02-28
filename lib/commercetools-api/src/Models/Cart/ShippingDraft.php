<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\BaseAddress;
use Commercetools\Api\Models\Order\DeliveryDraftCollection;
use Commercetools\Api\Models\ShippingMethod\ShippingMethodReference;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ShippingDraft extends JsonObject
{
    public const FIELD_KEY = 'key';
    public const FIELD_SHIPPING_METHOD = 'shippingMethod';
    public const FIELD_SHIPPING_ADDRESS = 'shippingAddress';
    public const FIELD_SHIPPING_RATE_INPUT = 'shippingRateInput';
    public const FIELD_EXTERNAL_TAX_RATE = 'externalTaxRate';
    public const FIELD_DELIVERIES = 'deliveries';
    public const FIELD_CUSTOM = 'custom';

    /**
     * <p>User-defined unique identifier for the Shipping in a Cart with <code>Multiple</code> <a href="ctp:api:type:ShippingMode">ShippingMode</a>.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>Shipping Methods added to the Cart with <code>Multiple</code> <a href="ctp:api:type:ShippingMode">ShippingMode</a>.</p>
     *

     * @return null|ShippingMethodReference
     */
    public function getShippingMethod();

    /**
     * <p>Determines the shipping rate and Tax Rate of the associated Line Items.</p>
     *

     * @return null|BaseAddress
     */
    public function getShippingAddress();

    /**
     * <p>Input used to select a <a href="ctp:api:type:ShippingRatePriceTier">ShippingRatePriceTier</a>.
     * The data type of this field depends on the <code>shippingRateInputType.type</code> configured in the <a href="ctp:api:type:Project">Project</a>:</p>
     * <ul>
     * <li>If <code>CartClassification</code>, it must be <a href="ctp:api:type:ClassificationShippingRateInputDraft">ClassificationShippingRateInputDraft</a>.</li>
     * <li>If <code>CartScore</code>, it must be <a href="ctp:api:type:ScoreShippingRateInputDraft">ScoreShippingRateInputDraft</a>.</li>
     * <li>If <code>CartValue</code>, it cannot be set.</li>
     * </ul>
     *

     * @return null|ShippingRateInputDraft
     */
    public function getShippingRateInput();

    /**
     * <p>Tax Rate used for taxing a shipping expense if the Cart has the <code>External</code> <a href="ctp:api:type:TaxMode">TaxMode</a>.</p>
     *

     * @return null|ExternalTaxRateDraft
     */
    public function getExternalTaxRate();

    /**
     * <p>Deliveries to be shipped with the Shipping Method.</p>
     *

     * @return null|DeliveryDraftCollection
     */
    public function getDeliveries();

    /**
     * <p>Custom Fields for Shipping.</p>
     *

     * @return null|CustomFieldsDraft
     */
    public function getCustom();

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

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
     * @param ?ExternalTaxRateDraft $externalTaxRate
     */
    public function setExternalTaxRate(?ExternalTaxRateDraft $externalTaxRate): void;

    /**
     * @param ?DeliveryDraftCollection $deliveries
     */
    public function setDeliveries(?DeliveryDraftCollection $deliveries): void;

    /**
     * @param ?CustomFieldsDraft $custom
     */
    public function setCustom(?CustomFieldsDraft $custom): void;
}
