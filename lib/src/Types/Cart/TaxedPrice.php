<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Base\JsonObject;

use Commercetools\Types\Common\Money;

interface TaxedPrice extends JsonObject
{
    const FIELD_TOTAL_NET = 'totalNet';
    const FIELD_TOTAL_GROSS = 'totalGross';
    const FIELD_TAX_PORTIONS = 'taxPortions';

    /**
     * @return Money
     */
    public function getTotalNet();

    /**
     * @return Money
     */
    public function getTotalGross();

    /**
     * @return TaxPortionCollection
     */
    public function getTaxPortions();

    /**
     * @param Money $totalNet
     * @return $this
     */
    public function setTotalNet(Money $totalNet);

    /**
     * @param Money $totalGross
     * @return $this
     */
    public function setTotalGross(Money $totalGross);

    /**
     * @param TaxPortionCollection $taxPortions
     * @return $this
     */
    public function setTaxPortions(TaxPortionCollection $taxPortions);

}
