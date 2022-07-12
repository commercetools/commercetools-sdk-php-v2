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
     * <p>ID of the TaxRate to replace.</p>
     *

     * @return null|string
     */
    public function getTaxRateId();

    /**
     * <p>New TaxRate to replace with.</p>
     *

     * @return null|TaxRateDraft
     */
    public function getTaxRate();

    /**
     * @param ?string $taxRateId
     */
    public function setTaxRateId(?string $taxRateId): void;

    /**
     * @param ?TaxRateDraft $taxRate
     */
    public function setTaxRate(?TaxRateDraft $taxRate): void;
}
