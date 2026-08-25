<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\ShippingMethod\ShippingMethodResourceIdentifier;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CartSetShippingMethodAction extends CartUpdateAction
{
    public const FIELD_SHIPPING_METHOD = 'shippingMethod';
    public const FIELD_EXTERNAL_TAX_RATE = 'externalTaxRate';
    public const FIELD_ESTIMATED_DELIVERY = 'estimatedDelivery';

    /**
     * <p>Value to set.
     * If omitted, any existing value is removed.</p>
     * <p><a href="ctp:api:type:InvalidOperationError">InvalidOperation</a> error is returned in one of the following cases:</p>
     * <ol>
     * <li>If the referenced Shipping Method has a predicate that does not match the Cart.</li>
     * <li>If the referenced Shipping Method is not active.</li>
     * <li>If the referenced Shipping Method is associated with a Store that is different from the Cart's Store.</li>
     * <li>If the referenced Shipping Method is associated with a Store and the Cart is not associated with any Store.</li>
     * </ol>
     *

     * @return null|ShippingMethodResourceIdentifier
     */
    public function getShippingMethod();

    /**
     * <p>An external Tax Rate can be set if the Cart has the <code>External</code> <a href="ctp:api:type:TaxMode">TaxMode</a>.</p>
     *

     * @return null|ExternalTaxRateDraft
     */
    public function getExternalTaxRate();

    /**
     * <p>Estimated time window during which the shipment is expected to be delivered.
     * If not set, any existing estimate on the Cart's <a href="ctp:api:type:ShippingInfo">ShippingInfo</a> is cleared.</p>
     *

     * @return null|EstimatedDelivery
     */
    public function getEstimatedDelivery();

    /**
     * @param ?ShippingMethodResourceIdentifier $shippingMethod
     */
    public function setShippingMethod(?ShippingMethodResourceIdentifier $shippingMethod): void;

    /**
     * @param ?ExternalTaxRateDraft $externalTaxRate
     */
    public function setExternalTaxRate(?ExternalTaxRateDraft $externalTaxRate): void;

    /**
     * @param ?EstimatedDelivery $estimatedDelivery
     */
    public function setEstimatedDelivery(?EstimatedDelivery $estimatedDelivery): void;
}
