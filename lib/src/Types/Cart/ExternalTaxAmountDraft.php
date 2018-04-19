<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Base\JsonObject;

use Commercetools\Types\Common\Money;

interface ExternalTaxAmountDraft extends JsonObject
{
    const FIELD_TOTAL_GROSS = 'totalGross';
    const FIELD_TAX_RATE = 'taxRate';

    /**
     * @return Money
     */
    public function getTotalGross();

    /**
     * @return ExternalTaxRateDraft
     */
    public function getTaxRate();

    /**
     * @param Money $totalGross
     * @return $this
     */
    public function setTotalGross(Money $totalGross);

    /**
     * @param ExternalTaxRateDraft $taxRate
     * @return $this
     */
    public function setTaxRate(ExternalTaxRateDraft $taxRate);

}
