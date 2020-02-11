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
     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * <p>Percentage in the range of [0..1].
     * Must be supplied if no <code>subRates</code> are specified.
     * If <code>subRates</code> are specified
     * then the <code>amount</code> can be omitted or it must be the sum of the amounts of all <code>subRates</code>.</p>
     *
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
     * <p>A two-digit country code as per <a href="https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2">ISO 3166-1 alpha-2</a>.</p>
     *
     * @return null|string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * <p>The state in the country</p>
     *
     * @return null|string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * <p>For countries (e.g.
     * the US) where the total tax is a combination of multiple taxes (e.g.
     * state and local taxes).</p>
     *
     * @return null|SubRateCollection
     */
    public function getSubRates()
    {
        return $this->subRates;
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
    public function withCountry(?string $country)
    {
        $this->country = $country;

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


    public function build(): TaxRateDraft
    {
        return new TaxRateDraftModel(
            $this->name,
            $this->amount,
            $this->includedInPrice,
            $this->country,
            $this->state,
            $this->subRates
        );
    }

    public static function of(): TaxRateDraftBuilder
    {
        return new self();
    }
}
