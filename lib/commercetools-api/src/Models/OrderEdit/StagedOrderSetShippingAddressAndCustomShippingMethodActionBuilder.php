<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Cart\ExternalTaxRateDraft;
use Commercetools\Api\Models\Cart\ExternalTaxRateDraftBuilder;
use Commercetools\Api\Models\Common\BaseAddress;
use Commercetools\Api\Models\Common\BaseAddressBuilder;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\Order\StagedOrderUpdateActionBuilder;
use Commercetools\Api\Models\ShippingMethod\ShippingRateDraft;
use Commercetools\Api\Models\ShippingMethod\ShippingRateDraftBuilder;
use Commercetools\Api\Models\TaxCategory\TaxCategoryResourceIdentifier;
use Commercetools\Api\Models\TaxCategory\TaxCategoryResourceIdentifierBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<StagedOrderSetShippingAddressAndCustomShippingMethodAction>
 */
final class StagedOrderSetShippingAddressAndCustomShippingMethodActionBuilder implements Builder
{
    /**

     * @var null|BaseAddress|BaseAddressBuilder
     */
    private $address;

    /**

     * @var ?string
     */
    private $shippingMethodName;

    /**

     * @var null|ShippingRateDraft|ShippingRateDraftBuilder
     */
    private $shippingRate;

    /**

     * @var null|TaxCategoryResourceIdentifier|TaxCategoryResourceIdentifierBuilder
     */
    private $taxCategory;

    /**

     * @var null|ExternalTaxRateDraft|ExternalTaxRateDraftBuilder
     */
    private $externalTaxRate;

    /**
     * <p>Polymorphic base type that represents a postal address and contact details.
     * Depending on the read or write action, it can be either <a href="ctp:api:type:Address">Address</a> or <a href="ctp:api:type:AddressDraft">AddressDraft</a> that
     * only differ in the data type for the optional <code>custom</code> field.</p>
     *

     * @return null|BaseAddress
     */
    public function getAddress()
    {
        return $this->address instanceof BaseAddressBuilder ? $this->address->build() : $this->address;
    }

    /**

     * @return null|string
     */
    public function getShippingMethodName()
    {
        return $this->shippingMethodName;
    }

    /**

     * @return null|ShippingRateDraft
     */
    public function getShippingRate()
    {
        return $this->shippingRate instanceof ShippingRateDraftBuilder ? $this->shippingRate->build() : $this->shippingRate;
    }

    /**
     * <p><a href="ctp:api:type:ResourceIdentifier">ResourceIdentifier</a> to a <a href="ctp:api:type:TaxCategory">TaxCategory</a>.</p>
     *

     * @return null|TaxCategoryResourceIdentifier
     */
    public function getTaxCategory()
    {
        return $this->taxCategory instanceof TaxCategoryResourceIdentifierBuilder ? $this->taxCategory->build() : $this->taxCategory;
    }

    /**
     * <p>Controls calculation of taxed prices for Line Items, Custom Line Items, and Shipping Methods as explained in <a href="ctp:api:type:CartTaxCalculation">Cart tax calculation</a>.</p>
     *

     * @return null|ExternalTaxRateDraft
     */
    public function getExternalTaxRate()
    {
        return $this->externalTaxRate instanceof ExternalTaxRateDraftBuilder ? $this->externalTaxRate->build() : $this->externalTaxRate;
    }

    /**
     * @param ?BaseAddress $address
     * @return $this
     */
    public function withAddress(?BaseAddress $address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * @param ?string $shippingMethodName
     * @return $this
     */
    public function withShippingMethodName(?string $shippingMethodName)
    {
        $this->shippingMethodName = $shippingMethodName;

        return $this;
    }

    /**
     * @param ?ShippingRateDraft $shippingRate
     * @return $this
     */
    public function withShippingRate(?ShippingRateDraft $shippingRate)
    {
        $this->shippingRate = $shippingRate;

        return $this;
    }

    /**
     * @param ?TaxCategoryResourceIdentifier $taxCategory
     * @return $this
     */
    public function withTaxCategory(?TaxCategoryResourceIdentifier $taxCategory)
    {
        $this->taxCategory = $taxCategory;

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
     * @deprecated use withAddress() instead
     * @return $this
     */
    public function withAddressBuilder(?BaseAddressBuilder $address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * @deprecated use withShippingRate() instead
     * @return $this
     */
    public function withShippingRateBuilder(?ShippingRateDraftBuilder $shippingRate)
    {
        $this->shippingRate = $shippingRate;

        return $this;
    }

    /**
     * @deprecated use withTaxCategory() instead
     * @return $this
     */
    public function withTaxCategoryBuilder(?TaxCategoryResourceIdentifierBuilder $taxCategory)
    {
        $this->taxCategory = $taxCategory;

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

    public function build(): StagedOrderSetShippingAddressAndCustomShippingMethodAction
    {
        return new StagedOrderSetShippingAddressAndCustomShippingMethodActionModel(
            $this->address instanceof BaseAddressBuilder ? $this->address->build() : $this->address,
            $this->shippingMethodName,
            $this->shippingRate instanceof ShippingRateDraftBuilder ? $this->shippingRate->build() : $this->shippingRate,
            $this->taxCategory instanceof TaxCategoryResourceIdentifierBuilder ? $this->taxCategory->build() : $this->taxCategory,
            $this->externalTaxRate instanceof ExternalTaxRateDraftBuilder ? $this->externalTaxRate->build() : $this->externalTaxRate
        );
    }

    public static function of(): StagedOrderSetShippingAddressAndCustomShippingMethodActionBuilder
    {
        return new self();
    }
}
