<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\Money;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ExternalTaxAmountDraft extends JsonObject
{
    public const FIELD_TOTAL_GROSS = 'totalGross';
    public const FIELD_TAX_RATE = 'taxRate';

    /**
     * <p>Total gross amount (<code>totalNet</code> + <code>taxPortions</code>) of the Line Item or Custom Line Item.</p>
     *

     * @return null|Money
     */
    public function getTotalGross();

    /**
     * <p>Tax Rates and subrates of states and countries.</p>
     *

     * @return null|ExternalTaxRateDraft
     */
    public function getTaxRate();

    /**
     * @param ?Money $totalGross
     */
    public function setTotalGross(?Money $totalGross): void;

    /**
     * @param ?ExternalTaxRateDraft $taxRate
     */
    public function setTaxRate(?ExternalTaxRateDraft $taxRate): void;
}
