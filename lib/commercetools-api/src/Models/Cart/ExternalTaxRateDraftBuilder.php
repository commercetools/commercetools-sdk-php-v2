<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\TaxCategory\SubRateCollection;
use Commercetools\Base\Builder;

/**
 * @implements Builder<ExternalTaxRateDraft>
 */
final class ExternalTaxRateDraftBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $country;

    /**
     * @var ?int
     */
    private $amount;

    /**
     * @var ?bool
     */
    private $includedInPrice;

    /**
     * @var ?string
     */
    private $name;

    /**
     * @var ?string
     */
    private $state;

    /**
     * @var ?SubRateCollection
     */
    private $subRates;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @return null|int
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @return null|bool
     */
    public function getIncludedInPrice()
    {
        return $this->includedInPrice;
    }

    /**
     * @return null|string
     */
    public function getName()
    {
        return $this->name;
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
     * @return $this
     */
    public function withCountry(?string $country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * @return $this
     */
    public function withAmount(?int $amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @return $this
     */
    public function withIncludedInPrice(?bool $includedInPrice)
    {
        $this->includedInPrice = $includedInPrice;

        return $this;
    }

    /**
     * @return $this
     */
    public function withName(?string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return $this
     */
    public function withState(?string $state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @return $this
     */
    public function withSubRates(?SubRateCollection $subRates)
    {
        $this->subRates = $subRates;

        return $this;
    }

    public function build(): ExternalTaxRateDraft
    {
        return new ExternalTaxRateDraftModel(
            $this->country,
            $this->amount,
            $this->includedInPrice,
            $this->name,
            $this->state,
            $this->subRates
        );
    }

    public static function of(): ExternalTaxRateDraftBuilder
    {
        return new self();
    }
}
