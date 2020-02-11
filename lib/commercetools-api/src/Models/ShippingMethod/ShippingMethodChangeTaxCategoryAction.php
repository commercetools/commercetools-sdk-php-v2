<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Api\Models\TaxCategory\TaxCategoryResourceIdentifier;

interface ShippingMethodChangeTaxCategoryAction extends ShippingMethodUpdateAction
{

    public const FIELD_TAX_CATEGORY = 'taxCategory';

    /**
     * @return null|TaxCategoryResourceIdentifier
     */
    public function getTaxCategory();

    public function setTaxCategory(?TaxCategoryResourceIdentifier $taxCategory): void;
}
