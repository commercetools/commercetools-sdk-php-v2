<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\TypedMoneyDraft;
use Commercetools\Base\JsonObject;

interface TaxedPriceDraft extends JsonObject
{
    const FIELD_TOTAL_NET = 'totalNet';
    const FIELD_TOTAL_GROSS = 'totalGross';
    const FIELD_TAX_PORTIONS = 'taxPortions';

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

    public function setTotalNet(?TypedMoneyDraft $totalNet): void;

    public function setTotalGross(?TypedMoneyDraft $totalGross): void;

    public function setTaxPortions(?TaxPortionDraftCollection $taxPortions): void;
}
