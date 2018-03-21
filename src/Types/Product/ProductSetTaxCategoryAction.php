<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\TaxCategory\TaxCategoryReference;

interface ProductSetTaxCategoryAction extends ProductUpdateAction {
    const FIELD_TAX_CATEGORY = 'taxCategory';

    /**
     * @return TaxCategoryReference
     */
    public function getTaxCategory();

    /**
     * @param TaxCategoryReference $taxCategory
     * @return $this
     */
    public function setTaxCategory(TaxCategoryReference $taxCategory);

}
