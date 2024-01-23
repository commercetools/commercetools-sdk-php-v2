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
 * @implements Builder<TaxRateDraft>
 */
final class TaxRateDraftBuilder implements Builder
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

     * @var ?string
     */
    private $key;

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
     * <p>Tax rate.
     * Must be supplied if no <code>subRates</code> are specified.
     * If <code>subRates</code> are specified, this field can be omitted or it must be the sum of amounts of all <code>subRates</code>.</p>
     *

     * @return null|float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * <p>If <code>true</code>, tax is included in <a href="ctp:api:type:Price">Embedded Prices</a> or <a href="ctp:api:type:StandalonePrice">Standalone Prices</a>, and the <code>taxedPrice</code> is present on <a href="ctp:api:type:LineItem">LineItems</a>. In this case, the <code>totalNet</code> price on <a href="ctp:api:type:TaxedPrice">TaxedPrice</a> includes the TaxRate.</p>
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
     * <p>Used to calculate the <a href="/../api/projects/carts#taxedprice">taxPortions</a> field in a Cart or Order. It is useful if the total tax of a country (such as the US) is a combination of multiple taxes (such as state and local taxes). The total of all subrates must equal the TaxRate <code>amount</code>.</p>
     *

     * @return null|SubRateCollection
     */
    public function getSubRates()
    {
        return $this->subRates;
    }

    /**
     * <p>User-defined unique identifier of the TaxRate.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
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

    /**
     * @param ?string $key
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }


    public function build(): TaxRateDraft
    {
        return new TaxRateDraftModel(
            $this->name,
            $this->amount,
            $this->includedInPrice,
            $this->country,
            $this->state,
            $this->subRates,
            $this->key
        );
    }

    public static function of(): TaxRateDraftBuilder
    {
        return new self();
    }
}
