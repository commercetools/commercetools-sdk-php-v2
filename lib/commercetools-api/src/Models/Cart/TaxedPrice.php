<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\TypedMoney;
use Commercetools\Base\JsonObject;

interface TaxedPrice extends JsonObject
{
    const FIELD_TOTAL_NET = 'totalNet';
    const FIELD_TOTAL_GROSS = 'totalGross';
    const FIELD_TAX_PORTIONS = 'taxPortions';

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

    public function setTotalNet(?TypedMoney $totalNet): void;

    public function setTotalGross(?TypedMoney $totalGross): void;

    public function setTaxPortions(?TaxPortionCollection $taxPortions): void;
}
