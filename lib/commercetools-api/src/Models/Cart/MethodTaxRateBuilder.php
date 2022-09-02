<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\TaxCategory\TaxRate;
use Commercetools\Api\Models\TaxCategory\TaxRateBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<MethodTaxRate>
 */
final class MethodTaxRateBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $shippingMethodKey;

    /**

     * @var null|TaxRate|TaxRateBuilder
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
     * <p>Tax Rate for the Shipping Method.</p>
     *

     * @return null|TaxRate
     */
    public function getTaxRate()
    {
        return $this->taxRate instanceof TaxRateBuilder ? $this->taxRate->build() : $this->taxRate;
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
     * @param ?TaxRate $taxRate
     * @return $this
     */
    public function withTaxRate(?TaxRate $taxRate)
    {
        $this->taxRate = $taxRate;

        return $this;
    }

    /**
     * @deprecated use withTaxRate() instead
     * @return $this
     */
    public function withTaxRateBuilder(?TaxRateBuilder $taxRate)
    {
        $this->taxRate = $taxRate;

        return $this;
    }

    public function build(): MethodTaxRate
    {
        return new MethodTaxRateModel(
            $this->shippingMethodKey,
            $this->taxRate instanceof TaxRateBuilder ? $this->taxRate->build() : $this->taxRate
        );
    }

    public static function of(): MethodTaxRateBuilder
    {
        return new self();
    }
}
