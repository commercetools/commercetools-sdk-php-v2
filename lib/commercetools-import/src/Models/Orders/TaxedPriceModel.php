<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Orders;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use Commercetools\Import\Models\Common\Money;
use Commercetools\Import\Models\Common\MoneyModel;
use stdClass;

/**
 * @internal
 */
final class TaxedPriceModel extends JsonObjectModel implements TaxedPrice
{
    /**
     *
     * @var ?Money
     */
    protected $totalNet;

    /**
     *
     * @var ?Money
     */
    protected $totalGross;

    /**
     *
     * @var ?TaxPortionCollection
     */
    protected $taxPortions;

    /**
     *
     * @var ?Money
     */
    protected $totalTax;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?Money $totalNet = null,
        ?Money $totalGross = null,
        ?TaxPortionCollection $taxPortions = null,
        ?Money $totalTax = null
    ) {
        $this->totalNet = $totalNet;
        $this->totalGross = $totalGross;
        $this->taxPortions = $taxPortions;
        $this->totalTax = $totalTax;
    }

    /**
     * <p>Maps to <code>TaxedPrice.totalNet</code>.</p>
     *
     *
     * @return null|Money
     */
    public function getTotalNet()
    {
        if (is_null($this->totalNet)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_TOTAL_NET);
            if (is_null($data)) {
                return null;
            }

            $this->totalNet = MoneyModel::of($data);
        }

        return $this->totalNet;
    }

    /**
     * <p>Maps to <code>TaxedPrice.totalGross</code>.</p>
     *
     *
     * @return null|Money
     */
    public function getTotalGross()
    {
        if (is_null($this->totalGross)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_TOTAL_GROSS);
            if (is_null($data)) {
                return null;
            }

            $this->totalGross = MoneyModel::of($data);
        }

        return $this->totalGross;
    }

    /**
     * <p>Maps to <code>TaxedPrice.taxPortions</code>.</p>
     *
     *
     * @return null|TaxPortionCollection
     */
    public function getTaxPortions()
    {
        if (is_null($this->taxPortions)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_TAX_PORTIONS);
            if (is_null($data)) {
                return null;
            }
            $this->taxPortions = TaxPortionCollection::fromArray($data);
        }

        return $this->taxPortions;
    }

    /**
     * <p>Maps to <code>TaxedPrice.totalTax</code>.</p>
     *
     *
     * @return null|Money
     */
    public function getTotalTax()
    {
        if (is_null($this->totalTax)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_TOTAL_TAX);
            if (is_null($data)) {
                return null;
            }

            $this->totalTax = MoneyModel::of($data);
        }

        return $this->totalTax;
    }


    /**
     * @param ?Money $totalNet
     */
    public function setTotalNet(?Money $totalNet): void
    {
        $this->totalNet = $totalNet;
    }

    /**
     * @param ?Money $totalGross
     */
    public function setTotalGross(?Money $totalGross): void
    {
        $this->totalGross = $totalGross;
    }

    /**
     * @param ?TaxPortionCollection $taxPortions
     */
    public function setTaxPortions(?TaxPortionCollection $taxPortions): void
    {
        $this->taxPortions = $taxPortions;
    }

    /**
     * @param ?Money $totalTax
     */
    public function setTotalTax(?Money $totalTax): void
    {
        $this->totalTax = $totalTax;
    }
}
