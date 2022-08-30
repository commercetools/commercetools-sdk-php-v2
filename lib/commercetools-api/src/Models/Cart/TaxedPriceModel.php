<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\TypedMoney;
use Commercetools\Api\Models\Common\TypedMoneyModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class TaxedPriceModel extends JsonObjectModel implements TaxedPrice
{
    /**
     *
     * @var ?TypedMoney
     */
    protected $totalNet;

    /**
     *
     * @var ?TypedMoney
     */
    protected $totalGross;

    /**
     *
     * @var ?TaxPortionCollection
     */
    protected $taxPortions;

    /**
     *
     * @var ?TypedMoney
     */
    protected $totalTax;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?TypedMoney $totalNet = null,
        ?TypedMoney $totalGross = null,
        ?TaxPortionCollection $taxPortions = null,
        ?TypedMoney $totalTax = null
    ) {
        $this->totalNet = $totalNet;
        $this->totalGross = $totalGross;
        $this->taxPortions = $taxPortions;
        $this->totalTax = $totalTax;
    }

    /**
     *
     * @return null|TypedMoney
     */
    public function getTotalNet()
    {
        if (is_null($this->totalNet)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_TOTAL_NET);
            if (is_null($data)) {
                return null;
            }

            $this->totalNet = TypedMoneyModel::of($data);
        }

        return $this->totalNet;
    }

    /**
     *
     * @return null|TypedMoney
     */
    public function getTotalGross()
    {
        if (is_null($this->totalGross)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_TOTAL_GROSS);
            if (is_null($data)) {
                return null;
            }

            $this->totalGross = TypedMoneyModel::of($data);
        }

        return $this->totalGross;
    }

    /**
     * <p>TaxedPrice fields that can be used in query predicates: <code>totalNet</code>, <code>totalGross</code>.</p>
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
     * <p>Calculated automatically as the subtraction of <code>totalGross</code> - <code>totalNet</code>.</p>
     *
     *
     * @return null|TypedMoney
     */
    public function getTotalTax()
    {
        if (is_null($this->totalTax)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_TOTAL_TAX);
            if (is_null($data)) {
                return null;
            }

            $this->totalTax = TypedMoneyModel::of($data);
        }

        return $this->totalTax;
    }


    /**
     * @param ?TypedMoney $totalNet
     */
    public function setTotalNet(?TypedMoney $totalNet): void
    {
        $this->totalNet = $totalNet;
    }

    /**
     * @param ?TypedMoney $totalGross
     */
    public function setTotalGross(?TypedMoney $totalGross): void
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
     * @param ?TypedMoney $totalTax
     */
    public function setTotalTax(?TypedMoney $totalTax): void
    {
        $this->totalTax = $totalTax;
    }
}
