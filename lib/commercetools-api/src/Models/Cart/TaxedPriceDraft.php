<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\TypedMoneyDraft;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface TaxedPriceDraft extends JsonObject
{
    public const FIELD_TOTAL_NET = 'totalNet';
    public const FIELD_TOTAL_GROSS = 'totalGross';
    public const FIELD_TAX_PORTIONS = 'taxPortions';

    /**
     * @return null|TypedMoneyDraft
     */
    public function getTotalNet();

    /**
     * @return null|TypedMoneyDraft
     */
    public function getTotalGross();

    /**
     * @return null|TaxPortionDraftCollection
     */
    public function getTaxPortions();

    /**
     * @param ?TypedMoneyDraft $totalNet
     */
    public function setTotalNet(?TypedMoneyDraft $totalNet): void;

    /**
     * @param ?TypedMoneyDraft $totalGross
     */
    public function setTotalGross(?TypedMoneyDraft $totalGross): void;

    /**
     * @param ?TaxPortionDraftCollection $taxPortions
     */
    public function setTaxPortions(?TaxPortionDraftCollection $taxPortions): void;
}
