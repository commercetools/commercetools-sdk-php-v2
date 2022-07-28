<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Api\Models\TaxCategory\TaxCategoryResourceIdentifier;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductSetTaxCategoryAction extends ProductUpdateAction
{
    public const FIELD_TAX_CATEGORY = 'taxCategory';

    /**
     * <p>The Tax Category to set. If empty, any existing value will be removed.</p>
     *

     * @return null|TaxCategoryResourceIdentifier
     */
    public function getTaxCategory();

    /**
     * @param ?TaxCategoryResourceIdentifier $taxCategory
     */
    public function setTaxCategory(?TaxCategoryResourceIdentifier $taxCategory): void;
}
