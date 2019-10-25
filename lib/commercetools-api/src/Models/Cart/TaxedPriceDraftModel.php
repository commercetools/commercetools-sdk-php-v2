<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\TypedMoneyDraft;
use Commercetools\Api\Models\Common\TypedMoneyDraftModel;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class TaxedPriceDraftModel extends JsonObjectModel implements TaxedPriceDraft
{
    /**
     * @var ?TaxPortionDraftCollection
     */
    protected $taxPortions;

    /**
     * @var ?TypedMoneyDraft
     */
    protected $totalGross;

    /**
     * @var ?TypedMoneyDraft
     */
    protected $totalNet;

    public function __construct(
        TaxPortionDraftCollection $taxPortions = null,
        TypedMoneyDraft $totalGross = null,
        TypedMoneyDraft $totalNet = null
    ) {
        $this->taxPortions = $taxPortions;
        $this->totalGross = $totalGross;
        $this->totalNet = $totalNet;
    }

    /**
     * @return null|TaxPortionDraftCollection
     */
    public function getTaxPortions()
    {
        if (is_null($this->taxPortions)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(TaxedPriceDraft::FIELD_TAX_PORTIONS);
            if (is_null($data)) {
                return null;
            }
            $this->taxPortions = TaxPortionDraftCollection::fromArray($data);
        }

        return $this->taxPortions;
    }

    /**
     * @return null|TypedMoneyDraft
     */
    public function getTotalGross()
    {
        if (is_null($this->totalGross)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(TaxedPriceDraft::FIELD_TOTAL_GROSS);
            if (is_null($data)) {
                return null;
            }
            $className = TypedMoneyDraftModel::resolveDiscriminatorClass($data);
            $this->totalGross = $className::of($data);
        }

        return $this->totalGross;
    }

    /**
     * @return null|TypedMoneyDraft
     */
    public function getTotalNet()
    {
        if (is_null($this->totalNet)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(TaxedPriceDraft::FIELD_TOTAL_NET);
            if (is_null($data)) {
                return null;
            }
            $className = TypedMoneyDraftModel::resolveDiscriminatorClass($data);
            $this->totalNet = $className::of($data);
        }

        return $this->totalNet;
    }

    public function setTaxPortions(?TaxPortionDraftCollection $taxPortions): void
    {
        $this->taxPortions = $taxPortions;
    }

    public function setTotalGross(?TypedMoneyDraft $totalGross): void
    {
        $this->totalGross = $totalGross;
    }

    public function setTotalNet(?TypedMoneyDraft $totalNet): void
    {
        $this->totalNet = $totalNet;
    }
}
