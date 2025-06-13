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
     * <p>Value to set.
     * If empty, any existing value is removed.</p>
     * <p>If the referenced Shipping Method is inactive, or has a predicate that does not match the Cart, an <a href="ctp:api:type:InvalidOperationError">InvalidOperation</a> error is returned.</p>
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

    public function build(): CartSetShippingMethodAction
    {
        return new CartSetShippingMethodActionModel(
            $this->shippingMethod instanceof ShippingMethodResourceIdentifierBuilder ? $this->shippingMethod->build() : $this->shippingMethod,
            $this->externalTaxRate instanceof ExternalTaxRateDraftBuilder ? $this->externalTaxRate->build() : $this->externalTaxRate
        );
    }

    public static function of(): CartSetShippingMethodActionBuilder
    {
        return new self();
    }
}
