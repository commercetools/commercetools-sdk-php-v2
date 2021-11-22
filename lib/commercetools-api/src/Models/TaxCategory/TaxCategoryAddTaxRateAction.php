<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\TaxCategory;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface TaxCategoryAddTaxRateAction extends TaxCategoryUpdateAction
{
    public const FIELD_TAX_RATE = 'taxRate';

    /**
     * <p>Value to append to the <code>rates</code> array.</p>
     *
     * @return null|TaxRateDraft
     */
    public function getTaxRate();

    /**
     * @param ?TaxRateDraft $taxRate
     */
    public function setTaxRate(?TaxRateDraft $taxRate): void;
}
