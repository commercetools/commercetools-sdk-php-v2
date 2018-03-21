<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShippingMethod;

use Commercetools\Types\TaxCategory\TaxCategoryReference;

interface ShippingMethodChangeTaxCategoryAction extends ShippingMethodUpdateAction {
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
