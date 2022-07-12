<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\TaxCategory;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface TaxCategoryRemoveTaxRateAction extends TaxCategoryUpdateAction
{
    public const FIELD_TAX_RATE_ID = 'taxRateId';

    /**
     * <p>ID of the TaxRate to remove.</p>
     *

     * @return null|string
     */
    public function getTaxRateId();

    /**
     * @param ?string $taxRateId
     */
    public function setTaxRateId(?string $taxRateId): void;
}
