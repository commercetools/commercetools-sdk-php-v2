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
 * @implements Builder<MethodTaxedPrice>
 */
final class MethodTaxedPriceBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $shippingMethodKey;

    /**

     * @var null|TaxedItemPrice|TaxedItemPriceBuilder
     */
    private $taxedPrice;

    /**
     * <p>User-defined unique identifier of the Shipping Method in a Cart with <code>Multi</code> <a href="ctp:api:type:ShippingMode">ShippingMode</a>.</p>
     *

     * @return null|string
     */
    public function getShippingMethodKey()
    {
        return $this->shippingMethodKey;
    }

    /**
     * <p>Taxed price for the Shipping Method.</p>
     *

     * @return null|TaxedItemPrice
     */
    public function getTaxedPrice()
    {
        return $this->taxedPrice instanceof TaxedItemPriceBuilder ? $this->taxedPrice->build() : $this->taxedPrice;
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
     * @param ?TaxedItemPrice $taxedPrice
     * @return $this
     */
    public function withTaxedPrice(?TaxedItemPrice $taxedPrice)
    {
        $this->taxedPrice = $taxedPrice;

        return $this;
    }

    /**
     * @deprecated use withTaxedPrice() instead
     * @return $this
     */
    public function withTaxedPriceBuilder(?TaxedItemPriceBuilder $taxedPrice)
    {
        $this->taxedPrice = $taxedPrice;

        return $this;
    }

    public function build(): MethodTaxedPrice
    {
        return new MethodTaxedPriceModel(
            $this->shippingMethodKey,
            $this->taxedPrice instanceof TaxedItemPriceBuilder ? $this->taxedPrice->build() : $this->taxedPrice
        );
    }

    public static function of(): MethodTaxedPriceBuilder
    {
        return new self();
    }
}
