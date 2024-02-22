<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\TypedMoneyDraft;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface TaxedPriceDraft extends JsonObject
{
    public const FIELD_TOTAL_NET = 'totalNet';
    public const FIELD_TOTAL_GROSS = 'totalGross';
    public const FIELD_TAX_PORTIONS = 'taxPortions';
    public const FIELD_TOTAL_TAX = 'totalTax';

    /**
     * <p>Total net price of the Cart or Order.</p>
     *

     * @return null|Money
     */
    public function getTotalNet();

    /**
     * <p>Total gross price of the Cart or Order.</p>
     *

     * @return null|Money
     */
    public function getTotalGross();

    /**
     * <p>Taxable portions added to the <code>totalGross</code>.</p>
     * <p>Calculated from the <a href="ctp:api:type:TaxRate">TaxRates</a>.</p>
     *

     * @return null|TaxPortionDraftCollection
     */
    public function getTaxPortions();

    /**
     * <p>Total tax applicable for the Cart or Order.</p>
     *

     * @return null|TypedMoneyDraft
     */
    public function getTotalTax();

    /**
     * @param ?Money $totalNet
     */
    public function setTotalNet(?Money $totalNet): void;

    /**
     * @param ?Money $totalGross
     */
    public function setTotalGross(?Money $totalGross): void;

    /**
     * @param ?TaxPortionDraftCollection $taxPortions
     */
    public function setTaxPortions(?TaxPortionDraftCollection $taxPortions): void;

    /**
     * @param ?TypedMoneyDraft $totalTax
     */
    public function setTotalTax(?TypedMoneyDraft $totalTax): void;
}
