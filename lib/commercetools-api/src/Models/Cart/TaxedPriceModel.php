<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\TypedMoney;
use Commercetools\Api\Models\Common\TypedMoneyModel;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class TaxedPriceModel extends JsonObjectModel implements TaxedPrice
{
    /**
     * @var ?TypedMoney
     */
    protected $totalNet;

    /**
     * @var ?TypedMoney
     */
    protected $totalGross;

    /**
     * @var ?TaxPortionCollection
     */
    protected $taxPortions;

    public function __construct(
        TypedMoney $totalNet = null,
        TypedMoney $totalGross = null,
        TaxPortionCollection $taxPortions = null
    ) {
        $this->totalNet = $totalNet;
        $this->totalGross = $totalGross;
        $this->taxPortions = $taxPortions;
    }

    /**
     * @return null|TypedMoney
     */
    public function getTotalNet()
    {
        if (is_null($this->totalNet)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(TaxedPrice::FIELD_TOTAL_NET);
            if (is_null($data)) {
                return null;
            }

            $this->totalNet = TypedMoneyModel::of($data);
        }

        return $this->totalNet;
    }

    /**
     * @return null|TypedMoney
     */
    public function getTotalGross()
    {
        if (is_null($this->totalGross)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(TaxedPrice::FIELD_TOTAL_GROSS);
            if (is_null($data)) {
                return null;
            }

            $this->totalGross = TypedMoneyModel::of($data);
        }

        return $this->totalGross;
    }

    /**
     * <p>TaxedPrice fields that can be used in query predicates: <code>totalNet</code>, <code>totalGross</code>.</p>.
     *
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

    public function setTotalNet(?TypedMoney $totalNet): void
    {
        $this->totalNet = $totalNet;
    }

    public function setTotalGross(?TypedMoney $totalGross): void
    {
        $this->totalGross = $totalGross;
    }

    public function setTaxPortions(?TaxPortionCollection $taxPortions): void
    {
        $this->taxPortions = $taxPortions;
    }
}
