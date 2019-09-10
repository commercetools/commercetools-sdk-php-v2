<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\TaxCategory\TaxCategoryResourceIdentifier;

interface ShippingMethodChangeTaxCategoryAction extends ShippingMethodUpdateAction
{
    
    const FIELD_TAX_CATEGORY = 'taxCategory';

    /**
     *
     * @return TaxCategoryResourceIdentifier|null
     */
    public function getTaxCategory();
    public function setTaxCategory(?TaxCategoryResourceIdentifier $taxCategory): void;
}