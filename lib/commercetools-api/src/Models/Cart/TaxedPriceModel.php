<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyModel;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class TaxedPriceModel extends JsonObjectModel implements TaxedPrice
{
    /**
     * @var ?TaxPortionCollection
     */
    protected $taxPortions;

    /**
     * @var ?Money
     */
    protected $totalGross;

    /**
     * @var ?Money
     */
    protected $totalNet;

    public function __construct(
        TaxPortionCollection $taxPortions = null,
        Money $totalGross = null,
        Money $totalNet = null
    ) {
        $this->taxPortions = $taxPortions;
        $this->totalGross = $totalGross;
        $this->totalNet = $totalNet;
    }

    /**
     * @return null|TaxPortionCollection
     */
    public function getTaxPortions()
    {
        if (is_null($this->taxPortions)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(TaxedPrice::FIELD_TAX_PORTIONS);
            if (is_null($data)) {
                return null;
            }
            $this->taxPortions = TaxPortionCollection::fromArray($data);
        }

        return $this->taxPortions;
    }

    /**
     * @return null|Money
     */
    public function getTotalGross()
    {
        if (is_null($this->totalGross)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(TaxedPrice::FIELD_TOTAL_GROSS);
            if (is_null($data)) {
                return null;
            }

            $this->totalGross = MoneyModel::of($data);
        }

        return $this->totalGross;
    }

    /**
     * @return null|Money
     */
    public function getTotalNet()
    {
        if (is_null($this->totalNet)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(TaxedPrice::FIELD_TOTAL_NET);
            if (is_null($data)) {
                return null;
            }

            $this->totalNet = MoneyModel::of($data);
        }

        return $this->totalNet;
    }

    public function setTaxPortions(?TaxPortionCollection $taxPortions): void
    {
        $this->taxPortions = $taxPortions;
    }

    public function setTotalGross(?Money $totalGross): void
    {
        $this->totalGross = $totalGross;
    }

    public function setTotalNet(?Money $totalNet): void
    {
        $this->totalNet = $totalNet;
    }
}
