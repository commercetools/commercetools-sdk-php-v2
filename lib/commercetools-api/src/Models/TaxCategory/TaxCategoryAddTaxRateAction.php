<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\TaxCategory;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface TaxCategoryAddTaxRateAction extends TaxCategoryUpdateAction
{

    public const FIELD_TAX_RATE = 'taxRate';

    /**
     * @return null|TaxRateDraft
     */
    public function getTaxRate();

    public function setTaxRate(?TaxRateDraft $taxRate): void;
}
