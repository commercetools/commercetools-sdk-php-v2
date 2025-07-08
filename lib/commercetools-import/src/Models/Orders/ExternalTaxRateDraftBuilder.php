<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Orders;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use Commercetools\Import\Models\Prices\SubRateCollection;
use stdClass;

/**
 * @implements Builder<ExternalTaxRateDraft>
 */
final class ExternalTaxRateDraftBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $name;

    /**

     * @var ?float
     */
    private $amount;

    /**

     * @var ?string
     */
    private $country;

    /**

     * @var ?string
     */
    private $state;

    /**

     * @var ?SubRateCollection
     */
    private $subRates;

    /**

     * @var ?bool
     */
    private $includedInPrice;

    /**
     * <p>Name of the Tax Rate.</p>
     *

     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * <p>Percentage in the range of 0-1.</p>
     * <ul>
     * <li>If no <code>subRates</code> are specified, a value must be defined.</li>
     * <li>If <code>subRates</code> are specified, this can be omitted or its value must be the sum of all <code>subRates</code> amounts.</li>
     * </ul>
     *

     * @return null|float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * <p>Country for which the tax applies.</p>
     *

     * @return null|string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * <p>State within the specified country.</p>
     *

     * @return null|string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * <p>Used when the total tax is a combination of multiple taxes (for example, local, state/provincial, and/or federal taxes). The total of all subrates must equal the TaxRate <code>amount</code>.
     * These subrates are used to calculate the <code>taxPortions</code> field of a <a href="ctp:api:type:Cart">Cart</a> or <a href="ctp:api:type:Order">Order</a> and the <code>taxedPrice</code> field of <a href="ctp:api:type:LineItem">LineItems</a>, <a href="ctp:api:type:CustomLineItem">CustomLineItems</a>, and <a href="ctp:api:type:ShippingInfo">ShippingInfos</a>.</p>
     *

     * @return null|SubRateCollection
     */
    public function getSubRates()
    {
        return $this->subRates;
    }

    /**
     * <ul>
     * <li>If set to <code>false</code>, the related price is considered the net price and the provided <code>amount</code> is applied to calculate the gross price.</li>
     * <li>If set to <code>true</code>, the related price is considered the gross price, and the provided <code>amount</code> is applied to calculate the net price.</li>
     * </ul>
     *

     * @return null|bool
     */
    public function getIncludedInPrice()
    {
        return $this->includedInPrice;
    }

    /**
     * @param ?string $name
     * @return $this
     */
    public function withName(?string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param ?float $amount
     * @return $this
     */
    public function withAmount(?float $amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @param ?string $country
     * @return $this
     */
    public function withCountry(?string $country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * @param ?string $state
     * @return $this
     */
    public function withState(?string $state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @param ?SubRateCollection $subRates
     * @return $this
     */
    public function withSubRates(?SubRateCollection $subRates)
    {
        $this->subRates = $subRates;

        return $this;
    }

    /**
     * @param ?bool $includedInPrice
     * @return $this
     */
    public function withIncludedInPrice(?bool $includedInPrice)
    {
        $this->includedInPrice = $includedInPrice;

        return $this;
    }


    public function build(): ExternalTaxRateDraft
    {
        return new ExternalTaxRateDraftModel(
            $this->name,
            $this->amount,
            $this->country,
            $this->state,
            $this->subRates,
            $this->includedInPrice
        );
    }

    public static function of(): ExternalTaxRateDraftBuilder
    {
        return new self();
    }
}
