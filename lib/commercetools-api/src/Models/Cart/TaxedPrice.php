<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\TypedMoney;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface TaxedPrice extends JsonObject
{
    public const FIELD_TOTAL_NET = 'totalNet';
    public const FIELD_TOTAL_GROSS = 'totalGross';
    public const FIELD_TAX_PORTIONS = 'taxPortions';
    public const FIELD_TOTAL_TAX = 'totalTax';

    /**

     * @return null|TypedMoney
     */
    public function getTotalNet();

    /**

     * @return null|TypedMoney
     */
    public function getTotalGross();

    /**
     * <p>TaxedPrice fields that can be used in query predicates: <code>totalNet</code>, <code>totalGross</code>.</p>
     *

     * @return null|TaxPortionCollection
     */
    public function getTaxPortions();

    /**
     * <p>Calculated automatically as the subtraction of <code>totalGross</code> - <code>totalNet</code>.</p>
     *

     * @return null|TypedMoney
     */
    public function getTotalTax();

    /**
     * @param ?TypedMoney $totalNet
     */
    public function setTotalNet(?TypedMoney $totalNet): void;

    /**
     * @param ?TypedMoney $totalGross
     */
    public function setTotalGross(?TypedMoney $totalGross): void;

    /**
     * @param ?TaxPortionCollection $taxPortions
     */
    public function setTaxPortions(?TaxPortionCollection $taxPortions): void;

    /**
     * @param ?TypedMoney $totalTax
     */
    public function setTotalTax(?TypedMoney $totalTax): void;
}
