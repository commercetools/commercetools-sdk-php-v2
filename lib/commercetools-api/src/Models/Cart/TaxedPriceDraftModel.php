<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\TypedMoneyDraft;
use Commercetools\Api\Models\Common\TypedMoneyDraftModel;
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
     * @var ?TypedMoneyDraft
     */
    protected $totalNet;

    /**
     * @var ?TypedMoneyDraft
     */
    protected $totalGross;

    /**
     * @var ?TaxPortionDraftCollection
     */
    protected $taxPortions;


    public function __construct(
        TypedMoneyDraft $totalNet = null,
        TypedMoneyDraft $totalGross = null,
        TaxPortionDraftCollection $taxPortions = null
    ) {
        $this->totalNet = $totalNet;
        $this->totalGross = $totalGross;
        $this->taxPortions = $taxPortions;
    }

    /**
     * @return null|TypedMoneyDraft
     */
    public function getTotalNet()
    {
        if (is_null($this->totalNet)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_TOTAL_NET);
            if (is_null($data)) {
                return null;
            }
            $className = TypedMoneyDraftModel::resolveDiscriminatorClass($data);
            $this->totalNet = $className::of($data);
        }

        return $this->totalNet;
    }

    /**
     * @return null|TypedMoneyDraft
     */
    public function getTotalGross()
    {
        if (is_null($this->totalGross)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_TOTAL_GROSS);
            if (is_null($data)) {
                return null;
            }
            $className = TypedMoneyDraftModel::resolveDiscriminatorClass($data);
            $this->totalGross = $className::of($data);
        }

        return $this->totalGross;
    }

    /**
     * @return null|TaxPortionDraftCollection
     */
    public function getTaxPortions()
    {
        if (is_null($this->taxPortions)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(self::FIELD_TAX_PORTIONS);
            if (is_null($data)) {
                return null;
            }
            $this->taxPortions = TaxPortionDraftCollection::fromArray($data);
        }

        return $this->taxPortions;
    }


    public function setTotalNet(?TypedMoneyDraft $totalNet): void
    {
        $this->totalNet = $totalNet;
    }

    public function setTotalGross(?TypedMoneyDraft $totalGross): void
    {
        $this->totalGross = $totalGross;
    }

    public function setTaxPortions(?TaxPortionDraftCollection $taxPortions): void
    {
        $this->taxPortions = $taxPortions;
    }
}
