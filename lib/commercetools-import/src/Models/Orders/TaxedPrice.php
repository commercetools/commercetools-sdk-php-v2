<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Orders;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\Common\Money;

interface TaxedPrice extends JsonObject
{
    public const FIELD_TOTAL_NET = 'totalNet';
    public const FIELD_TOTAL_GROSS = 'totalGross';
    public const FIELD_TAX_PORTIONS = 'taxPortions';

    /**
     * <p>Maps to <code>TaxedPrice.totalNet</code>.</p>
     *

     * @return null|Money
     */
    public function getTotalNet();

    /**
     * <p>Maps to <code>TaxedPrice.totalGross</code>.</p>
     *

     * @return null|Money
     */
    public function getTotalGross();

    /**
     * <p>Maps to <code>TaxedPrice.taxPortions</code>.</p>
     *

     * @return null|TaxPortionCollection
     */
    public function getTaxPortions();

    /**
     * @param ?Money $totalNet
     */
    public function setTotalNet(?Money $totalNet): void;

    /**
     * @param ?Money $totalGross
     */
    public function setTotalGross(?Money $totalGross): void;

    /**
     * @param ?TaxPortionCollection $taxPortions
     */
    public function setTaxPortions(?TaxPortionCollection $taxPortions): void;
}
