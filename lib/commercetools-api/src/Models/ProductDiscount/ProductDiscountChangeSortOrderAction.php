<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\ProductDiscount;

use Commercetools\Base\JsonObject;

interface ProductDiscountChangeSortOrderAction extends ProductDiscountUpdateAction
{
    
    const FIELD_SORT_ORDER = 'sortOrder';

    /**
     *
     * @return string|null
     */
    public function getSortOrder();
    public function setSortOrder(?string $sortOrder): void;
}