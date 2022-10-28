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

     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**

     * @return null|float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**

     * @return null|string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**

     * @return null|string
     */
    public function getState()
    {
        return $this->state;
    }

    /**

     * @return null|SubRateCollection
     */
    public function getSubRates()
    {
        return $this->subRates;
    }

    /**

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
