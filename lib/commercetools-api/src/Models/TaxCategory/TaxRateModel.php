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

final class TaxRateModel extends JsonObjectModel implements TaxRate
{
    /**
     * @var ?string
     */
    protected $id;

    /**
     * @var ?string
     */
    protected $name;

    /**
     * @var ?int
     */
    protected $amount;

    /**
     * @var ?bool
     */
    protected $includedInPrice;

    /**
     * @var ?string
     */
    protected $country;

    /**
     * @var ?string
     */
    protected $state;

    /**
     * @var ?SubRateCollection
     */
    protected $subRates;


    public function __construct(
        string $id = null,
        string $name = null,
        int $amount = null,
        bool $includedInPrice = null,
        string $country = null,
        string $state = null,
        SubRateCollection $subRates = null
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->amount = $amount;
        $this->includedInPrice = $includedInPrice;
        $this->country = $country;
        $this->state = $state;
        $this->subRates = $subRates;
    }

    /**
     * <p>The ID is always set if the tax rate is part of a TaxCategory.
     * The external tax rates in a
     * Cart do not contain an <code>id</code>.</p>
     *
     * @return null|string
     */
    public function getId()
    {
        if (is_null($this->id)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(TaxRate::FIELD_ID);
            if (is_null($data)) {
                return null;
            }
            $this->id = (string) $data;
        }

        return $this->id;
    }

    /**
     * @return null|string
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(TaxRate::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->name = (string) $data;
        }

        return $this->name;
    }

    /**
     * <p>Percentage in the range of [0..1].
     * The sum of the amounts of all <code>subRates</code>, if there are any.</p>
     *
     * @return null|int
     */
    public function getAmount()
    {
        if (is_null($this->amount)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(TaxRate::FIELD_AMOUNT);
            if (is_null($data)) {
                return null;
            }
            $this->amount = (int) $data;
        }

        return $this->amount;
    }

    /**
     * @return null|bool
     */
    public function getIncludedInPrice()
    {
        if (is_null($this->includedInPrice)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(TaxRate::FIELD_INCLUDED_IN_PRICE);
            if (is_null($data)) {
                return null;
            }
            $this->includedInPrice = (bool) $data;
        }

        return $this->includedInPrice;
    }

    /**
     * <p>A two-digit country code as per <a href="https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2">ISO 3166-1 alpha-2</a>.</p>
     *
     * @return null|string
     */
    public function getCountry()
    {
        if (is_null($this->country)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(TaxRate::FIELD_COUNTRY);
            if (is_null($data)) {
                return null;
            }
            $this->country = (string) $data;
        }

        return $this->country;
    }

    /**
     * <p>The state in the country</p>
     *
     * @return null|string
     */
    public function getState()
    {
        if (is_null($this->state)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(TaxRate::FIELD_STATE);
            if (is_null($data)) {
                return null;
            }
            $this->state = (string) $data;
        }

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
        if (is_null($this->subRates)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(TaxRate::FIELD_SUB_RATES);
            if (is_null($data)) {
                return null;
            }
            $this->subRates = SubRateCollection::fromArray($data);
        }

        return $this->subRates;
    }

    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function setAmount(?int $amount): void
    {
        $this->amount = $amount;
    }

    public function setIncludedInPrice(?bool $includedInPrice): void
    {
        $this->includedInPrice = $includedInPrice;
    }

    public function setCountry(?string $country): void
    {
        $this->country = $country;
    }

    public function setState(?string $state): void
    {
        $this->state = $state;
    }

    public function setSubRates(?SubRateCollection $subRates): void
    {
        $this->subRates = $subRates;
    }
}
