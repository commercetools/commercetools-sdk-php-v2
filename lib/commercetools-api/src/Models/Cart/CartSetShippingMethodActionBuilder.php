<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\ShippingMethod\ShippingMethodResourceIdentifier;
use Commercetools\Api\Models\ShippingMethod\ShippingMethodResourceIdentifierBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CartSetShippingMethodAction>
 */
final class CartSetShippingMethodActionBuilder implements Builder
{
    /**

     * @var null|ShippingMethodResourceIdentifier|ShippingMethodResourceIdentifierBuilder
     */
    private $shippingMethod;

    /**

     * @var null|ExternalTaxRateDraft|ExternalTaxRateDraftBuilder
     */
    private $externalTaxRate;

    /**

     * @var null|EstimatedDelivery|EstimatedDeliveryBuilder
     */
    private $estimatedDelivery;

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
    public function getShippingMethod()
    {
        return $this->shippingMethod instanceof ShippingMethodResourceIdentifierBuilder ? $this->shippingMethod->build() : $this->shippingMethod;
    }

    /**
     * <p>An external Tax Rate can be set if the Cart has the <code>External</code> <a href="ctp:api:type:TaxMode">TaxMode</a>.</p>
     *

     * @return null|ExternalTaxRateDraft
     */
    public function getExternalTaxRate()
    {
        return $this->externalTaxRate instanceof ExternalTaxRateDraftBuilder ? $this->externalTaxRate->build() : $this->externalTaxRate;
    }

    /**
     * <p>Estimated time window during which the shipment is expected to be delivered.
     * If not set, any existing estimate on the Cart's <a href="ctp:api:type:ShippingInfo">ShippingInfo</a> is cleared.</p>
     *

     * @return null|EstimatedDelivery
     */
    public function getEstimatedDelivery()
    {
        return $this->estimatedDelivery instanceof EstimatedDeliveryBuilder ? $this->estimatedDelivery->build() : $this->estimatedDelivery;
    }

    /**
     * @param ?ShippingMethodResourceIdentifier $shippingMethod
     * @return $this
     */
    public function withShippingMethod(?ShippingMethodResourceIdentifier $shippingMethod)
    {
        $this->shippingMethod = $shippingMethod;

        return $this;
    }

    /**
     * @param ?ExternalTaxRateDraft $externalTaxRate
     * @return $this
     */
    public function withExternalTaxRate(?ExternalTaxRateDraft $externalTaxRate)
    {
        $this->externalTaxRate = $externalTaxRate;

        return $this;
    }

    /**
     * @param ?EstimatedDelivery $estimatedDelivery
     * @return $this
     */
    public function withEstimatedDelivery(?EstimatedDelivery $estimatedDelivery)
    {
        $this->estimatedDelivery = $estimatedDelivery;

        return $this;
    }

    /**
     * @deprecated use withShippingMethod() instead
     * @return $this
     */
    public function withShippingMethodBuilder(?ShippingMethodResourceIdentifierBuilder $shippingMethod)
    {
        $this->shippingMethod = $shippingMethod;

        return $this;
    }

    /**
     * @deprecated use withExternalTaxRate() instead
     * @return $this
     */
    public function withExternalTaxRateBuilder(?ExternalTaxRateDraftBuilder $externalTaxRate)
    {
        $this->externalTaxRate = $externalTaxRate;

        return $this;
    }

    /**
     * @deprecated use withEstimatedDelivery() instead
     * @return $this
     */
    public function withEstimatedDeliveryBuilder(?EstimatedDeliveryBuilder $estimatedDelivery)
    {
        $this->estimatedDelivery = $estimatedDelivery;

        return $this;
    }

    public function build(): CartSetShippingMethodAction
    {
        return new CartSetShippingMethodActionModel(
            $this->shippingMethod instanceof ShippingMethodResourceIdentifierBuilder ? $this->shippingMethod->build() : $this->shippingMethod,
            $this->externalTaxRate instanceof ExternalTaxRateDraftBuilder ? $this->externalTaxRate->build() : $this->externalTaxRate,
            $this->estimatedDelivery instanceof EstimatedDeliveryBuilder ? $this->estimatedDelivery->build() : $this->estimatedDelivery
        );
    }

    public static function of(): CartSetShippingMethodActionBuilder
    {
        return new self();
    }
}
