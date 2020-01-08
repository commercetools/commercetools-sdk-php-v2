<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\Money;
use Commercetools\Base\JsonObject;

interface ExternalTaxAmountDraft extends JsonObject
{
    const FIELD_TOTAL_GROSS = 'totalGross';
    const FIELD_TAX_RATE = 'taxRate';

    /**
     * <p>The total gross amount of the item (totalNet + taxes).</p>.
     *
     * @return null|Money
     */
    public function getTotalGross();

    /**
     * @return null|ExternalTaxRateDraft
     */
    public function getTaxRate();

    public function setTotalGross(?Money $totalGross): void;

    public function setTaxRate(?ExternalTaxRateDraft $taxRate): void;
}
