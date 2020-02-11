<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\TaxCategory;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface TaxCategoryReplaceTaxRateAction extends TaxCategoryUpdateAction
{
    public const FIELD_TAX_RATE_ID = 'taxRateId';
    public const FIELD_TAX_RATE = 'taxRate';

    /**
     * @return null|string
     */
    public function getTaxRateId();

    /**
     * @return null|TaxRateDraft
     */
    public function getTaxRate();

    public function setTaxRateId(?string $taxRateId): void;

    public function setTaxRate(?TaxRateDraft $taxRate): void;
}
