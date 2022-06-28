<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class TaxedPriceDraftModel extends JsonObjectModel implements TaxedPriceDraft
{
    /**
     * @var ?Money
     */
    protected $totalNet;

    /**
     * @var ?Money
     */
    protected $totalGross;

    /**
     * @var ?TaxPortionDraftCollection
     */
    protected $taxPortions;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?Money $totalNet = null,
        ?Money $totalGross = null,
        ?TaxPortionDraftCollection $taxPortions = null
    ) {
        $this->totalNet = $totalNet;
        $this->totalGross = $totalGross;
        $this->taxPortions = $taxPortions;
    }

    /**
     * <p>Draft type that stores amounts in cent precision for the specified currency.</p>
     * <p>For storing money values in fractions of the minor unit in a currency, use <a href="ctp:api:type:HighPrecisionMoneyDraft">HighPrecisionMoneyDraft</a> instead.</p>
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
     * <p>Draft type that stores amounts in cent precision for the specified currency.</p>
     * <p>For storing money values in fractions of the minor unit in a currency, use <a href="ctp:api:type:HighPrecisionMoneyDraft">HighPrecisionMoneyDraft</a> instead.</p>
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
     * @return null|TaxPortionDraftCollection
     */
    public function getTaxPortions()
    {
        if (is_null($this->taxPortions)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_TAX_PORTIONS);
            if (is_null($data)) {
                return null;
            }
            $this->taxPortions = TaxPortionDraftCollection::fromArray($data);
        }

        return $this->taxPortions;
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
     * @param ?TaxPortionDraftCollection $taxPortions
     */
    public function setTaxPortions(?TaxPortionDraftCollection $taxPortions): void
    {
        $this->taxPortions = $taxPortions;
    }
}
