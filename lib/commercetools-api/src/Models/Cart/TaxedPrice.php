<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\Money;
use Commercetools\Base\JsonObject;

interface TaxedPrice extends JsonObject
{
    const FIELD_TOTAL_NET = 'totalNet';
    const FIELD_TOTAL_GROSS = 'totalGross';
    const FIELD_TAX_PORTIONS = 'taxPortions';

    /**
     * @return null|Money
     */
    public function getTotalNet();

    /**
     * @return null|Money
     */
    public function getTotalGross();

    /**
     * @return null|TaxPortionCollection
     */
    public function getTaxPortions();

    public function setTotalNet(?Money $totalNet): void;

    public function setTotalGross(?Money $totalGross): void;

    public function setTaxPortions(?TaxPortionCollection $taxPortions): void;
}
