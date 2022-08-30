<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\TaxCategory;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class TaxRateDraftModel extends JsonObjectModel implements TaxRateDraft
{
    /**
     *
     * @var ?string
     */
    protected $name;

    /**
     *
     * @var ?float
     */
    protected $amount;

    /**
     *
     * @var ?bool
     */
    protected $includedInPrice;

    /**
     *
     * @var ?string
     */
    protected $country;

    /**
     *
     * @var ?string
     */
    protected $state;

    /**
     *
     * @var ?SubRateCollection
     */
    protected $subRates;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $name = null,
        ?float $amount = null,
        ?bool $includedInPrice = null,
        ?string $country = null,
        ?string $state = null,
        ?SubRateCollection $subRates = null
    ) {
        $this->name = $name;
        $this->amount = $amount;
        $this->includedInPrice = $includedInPrice;
        $this->country = $country;
        $this->state = $state;
        $this->subRates = $subRates;
    }

    /**
     * <p>Name of the TaxRate.</p>
     *
     *
     * @return null|string
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->name = (string) $data;
        }

        return $this->name;
    }

    /**
     * <p>Tax rate.
     * Must be supplied if no <code>subRates</code> are specified.
     * If <code>subRates</code> are specified, this field can be omitted or it must be the sum of amounts of all <code>subRates</code>.</p>
     *
     *
     * @return null|float
     */
    public function getAmount()
    {
        if (is_null($this->amount)) {
            /** @psalm-var ?float $data */
            $data = $this->raw(self::FIELD_AMOUNT);
            if (is_null($data)) {
                return null;
            }
            $this->amount = (float) $data;
        }

        return $this->amount;
    }

    /**
     * <p>If <code>true</code>, tax is included in <a href="ctp:api:type:Price">Embedded Prices</a> and the <code>taxedPrice</code> is present on <a href="ctp:api:type:LineItem">LineItems</a>. In this case, the <code>totalNet</code> price on <a href="ctp:api:type:TaxedPrice">TaxedPrice</a> includes the TaxRate.</p>
     *
     *
     * @return null|bool
     */
    public function getIncludedInPrice()
    {
        if (is_null($this->includedInPrice)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_INCLUDED_IN_PRICE);
            if (is_null($data)) {
                return null;
            }
            $this->includedInPrice = (bool) $data;
        }

        return $this->includedInPrice;
    }

    /**
     * <p>Country in which the tax rate is applied in <a href="https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2">ISO 3166-1 alpha-2</a> format.</p>
     *
     *
     * @return null|string
     */
    public function getCountry()
    {
        if (is_null($this->country)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_COUNTRY);
            if (is_null($data)) {
                return null;
            }
            $this->country = (string) $data;
        }

        return $this->country;
    }

    /**
     * <p>State within the country, such as Texas in the United States.</p>
     *
     *
     * @return null|string
     */
    public function getState()
    {
        if (is_null($this->state)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_STATE);
            if (is_null($data)) {
                return null;
            }
            $this->state = (string) $data;
        }

        return $this->state;
    }

    /**
     * <p>Used to calculate the <a href="/../api/projects/carts#taxedprice">taxPortions</a> field in a Cart or Order. It is useful if the total tax of a country (such as the US) is a combination of multiple taxes (such as state and local taxes).</p>
     *
     *
     * @return null|SubRateCollection
     */
    public function getSubRates()
    {
        if (is_null($this->subRates)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_SUB_RATES);
            if (is_null($data)) {
                return null;
            }
            $this->subRates = SubRateCollection::fromArray($data);
        }

        return $this->subRates;
    }


    /**
     * @param ?string $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @param ?float $amount
     */
    public function setAmount(?float $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * @param ?bool $includedInPrice
     */
    public function setIncludedInPrice(?bool $includedInPrice): void
    {
        $this->includedInPrice = $includedInPrice;
    }

    /**
     * @param ?string $country
     */
    public function setCountry(?string $country): void
    {
        $this->country = $country;
    }

    /**
     * @param ?string $state
     */
    public function setState(?string $state): void
    {
        $this->state = $state;
    }

    /**
     * @param ?SubRateCollection $subRates
     */
    public function setSubRates(?SubRateCollection $subRates): void
    {
        $this->subRates = $subRates;
    }
}
