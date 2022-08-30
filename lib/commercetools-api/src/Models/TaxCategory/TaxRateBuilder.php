<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\TaxCategory;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<TaxRate>
 */
final class TaxRateBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $id;

    /**

     * @var ?string
     */
    private $name;

    /**

     * @var ?float
     */
    private $amount;

    /**

     * @var ?bool
     */
    private $includedInPrice;

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
     * <p>Present if the TaxRate is part of a <a href="ctp:api:type:TaxCategory">TaxCategory</a>.
     * Absent for external TaxRates in <a href="ctp:api:type:LineItem">LineItem</a>, <a href="ctp:api:type:CustomLineItem">CustomLineItem</a>, and <a href="ctp:api:type:ShippingInfo">ShippingInfo</a>.</p>
     *

     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <p>Name of the TaxRate.</p>
     *

     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * <p>Tax rate. If subrates are used, the amount must be the sum of all subrates.</p>
     *

     * @return null|float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * <p>If <code>true</code>, tax is included in <a href="ctp:api:type:Price">Embedded Prices</a> and the <code>taxedPrice</code> is present on <a href="ctp:api:type:LineItem">LineItems</a>. In this case, the <code>totalNet</code> price on <a href="ctp:api:type:TaxedPrice">TaxedPrice</a> includes the TaxRate.</p>
     *

     * @return null|bool
     */
    public function getIncludedInPrice()
    {
        return $this->includedInPrice;
    }

    /**
     * <p>Country in which the tax rate is applied in <a href="https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2">ISO 3166-1 alpha-2</a> format.</p>
     *

     * @return null|string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * <p>State within the country, such as Texas in the United States.</p>
     *

     * @return null|string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * <p>Used to calculate the <a href="/../api/projects/carts#taxedprice">taxPortions</a> field in a Cart or Order. It is useful if the total tax of a country (such as the US) is a combination of multiple taxes (such as state and local taxes).</p>
     *

     * @return null|SubRateCollection
     */
    public function getSubRates()
    {
        return $this->subRates;
    }

    /**
     * @param ?string $id
     * @return $this
     */
    public function withId(?string $id)
    {
        $this->id = $id;

        return $this;
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
     * @param ?bool $includedInPrice
     * @return $this
     */
    public function withIncludedInPrice(?bool $includedInPrice)
    {
        $this->includedInPrice = $includedInPrice;

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


    public function build(): TaxRate
    {
        return new TaxRateModel(
            $this->id,
            $this->name,
            $this->amount,
            $this->includedInPrice,
            $this->country,
            $this->state,
            $this->subRates
        );
    }

    public static function of(): TaxRateBuilder
    {
        return new self();
    }
}
