<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Product;

use Commercetools\Base\JsonObject;

interface FilteredFacetResult extends FacetResult
{
    
    const FIELD_COUNT = 'count';
    const FIELD_PRODUCT_COUNT = 'productCount';

    /**
     *
     * @return int|null
     */
    public function getCount();
    
    /**
     *
     * @return int|null
     */
    public function getProductCount();
    public function setCount(?int $count): void;
    
    public function setProductCount(?int $productCount): void;
}