<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Prices;

use Commercetools\Base\JsonObjectModel;
use stdClass;

final class TaxRateModel extends JsonObjectModel implements TaxRate
{
    /**
     * @var ?string
     */
    protected $country;

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
    protected $name;

    /**
     * @var ?string
     */
    protected $state;

    /**
     * @var ?string
     */
    protected $id;

    /**
     * @var ?SubRateCollection
     */
    protected $subRates;

    public function __construct(
        string $country = null,
        int $amount = null,
        bool $includedInPrice = null,
        string $name = null,
        string $state = null,
        string $id = null,
        SubRateCollection $subRates = null
    ) {
        $this->country = $country;
        $this->amount = $amount;
        $this->includedInPrice = $includedInPrice;
        $this->name = $name;
        $this->state = $state;
        $this->id = $id;
        $this->subRates = $subRates;
    }

    /**
     * <p>A two-digit country code as per <a href="https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2">ISO 3166-1 alpha-2</a>.</p>.
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

    public function setCountry(?string $country): void
    {
        $this->country = $country;
    }

    public function setAmount(?int $amount): void
    {
        $this->amount = $amount;
    }

    public function setIncludedInPrice(?bool $includedInPrice): void
    {
        $this->includedInPrice = $includedInPrice;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function setState(?string $state): void
    {
        $this->state = $state;
    }

    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    public function setSubRates(?SubRateCollection $subRates): void
    {
        $this->subRates = $subRates;
    }
}
