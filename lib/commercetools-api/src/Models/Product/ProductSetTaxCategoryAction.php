<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Api\Models\TaxCategory\TaxCategoryResourceIdentifier;

interface ProductSetTaxCategoryAction extends ProductUpdateAction
{
    const FIELD_TAX_CATEGORY = 'taxCategory';

    /**
     * <p>If left blank or set to <code>null</code>, the tax category is unset/removed.</p>.
     *
     * @return null|TaxCategoryResourceIdentifier
     */
    public function getTaxCategory();

    public function setTaxCategory(?TaxCategoryResourceIdentifier $taxCategory): void;
}
