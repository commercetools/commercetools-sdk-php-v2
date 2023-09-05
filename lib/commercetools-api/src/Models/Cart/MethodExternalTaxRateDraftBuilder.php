<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<MethodExternalTaxRateDraft>
 */
final class MethodExternalTaxRateDraftBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $shippingMethodKey;

    /**

     * @var null|ExternalTaxRateDraft|ExternalTaxRateDraftBuilder
     */
    private $taxRate;

    /**
     * <p>User-defined unique identifier of the Shipping Method in a Cart with <code>Multiple</code> <a href="ctp:api:type:ShippingMode">ShippingMode</a>.</p>
     *

     * @return null|string
     */
    public function getShippingMethodKey()
    {
        return $this->shippingMethodKey;
    }

    /**
     * <p>External Tax Rate for the Shipping Method, if the Cart has <code>External</code> <a href="ctp:api:type:TaxMode">TaxMode</a>.</p>
     *

     * @return null|ExternalTaxRateDraft
     */
    public function getTaxRate()
    {
        return $this->taxRate instanceof ExternalTaxRateDraftBuilder ? $this->taxRate->build() : $this->taxRate;
    }

    /**
     * @param ?string $shippingMethodKey
     * @return $this
     */
    public function withShippingMethodKey(?string $shippingMethodKey)
    {
        $this->shippingMethodKey = $shippingMethodKey;

        return $this;
    }

    /**
     * @param ?ExternalTaxRateDraft $taxRate
     * @return $this
     */
    public function withTaxRate(?ExternalTaxRateDraft $taxRate)
    {
        $this->taxRate = $taxRate;

        return $this;
    }

    /**
     * @deprecated use withTaxRate() instead
     * @return $this
     */
    public function withTaxRateBuilder(?ExternalTaxRateDraftBuilder $taxRate)
    {
        $this->taxRate = $taxRate;

        return $this;
    }

    public function build(): MethodExternalTaxRateDraft
    {
        return new MethodExternalTaxRateDraftModel(
            $this->shippingMethodKey,
            $this->taxRate instanceof ExternalTaxRateDraftBuilder ? $this->taxRate->build() : $this->taxRate
        );
    }

    public static function of(): MethodExternalTaxRateDraftBuilder
    {
        return new self();
    }
}
