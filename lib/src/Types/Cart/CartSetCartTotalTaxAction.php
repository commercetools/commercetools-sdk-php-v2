<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Common\Money;

interface CartSetCartTotalTaxAction extends CartUpdateAction
{
    const FIELD_EXTERNAL_TOTAL_GROSS = 'externalTotalGross';
    const FIELD_EXTERNAL_TAX_PORTIONS = 'externalTaxPortions';

    /**
     * @return Money
     */
    public function getExternalTotalGross();

    /**
     * @return TaxPortionCollection
     */
    public function getExternalTaxPortions();

    /**
     * @param Money $externalTotalGross
     * @return $this
     */
    public function setExternalTotalGross(Money $externalTotalGross);

    /**
     * @param TaxPortionCollection $externalTaxPortions
     * @return $this
     */
    public function setExternalTaxPortions(TaxPortionCollection $externalTaxPortions);

}
