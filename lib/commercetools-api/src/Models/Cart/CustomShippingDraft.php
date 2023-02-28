<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\BaseAddress;
use Commercetools\Api\Models\Order\DeliveryDraftCollection;
use Commercetools\Api\Models\ShippingMethod\ShippingRateDraft;
use Commercetools\Api\Models\TaxCategory\TaxCategoryResourceIdentifier;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
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
     * <p>User-defined unique identifier of the custom Shipping Method in the Cart with <code>Multiple</code> <a href="ctp:api:type:ShippingMode">ShippingMode</a>.</p>
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
     * <p>Tax Category used to determine a shipping Tax Rate if the Cart has the <code>Platform</code> <a href="ctp:api:type:TaxMode">TaxMode</a>.</p>
     *

     * @return null|TaxCategoryResourceIdentifier
     */
    public function getTaxCategory();

    /**
     * <p>Tax Rate used to tax a shipping expense if the Cart has the <code>External</code> <a href="ctp:api:type:TaxMode">TaxMode</a>.</p>
     *

     * @return null|ExternalTaxRateDraft
     */
    public function getExternalTaxRate();

    /**
     * <p>Deliveries to be shipped with the custom Shipping Method.</p>
     *

     * @return null|DeliveryDraftCollection
     */
    public function getDeliveries();

    /**
     * <p>Custom Fields for the custom Shipping Method.</p>
     *

     * @return null|CustomFieldsDraft
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
