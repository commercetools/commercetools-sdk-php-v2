<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Product;

use Commercetools\Base\JsonObject;

interface FacetResultTerm extends JsonObject
{
    
    const FIELD_TERM = 'term';
    const FIELD_COUNT = 'count';
    const FIELD_PRODUCT_COUNT = 'productCount';

    /**
     *
     * @return JsonObject|null
     */
    public function getTerm();
    
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
    public function setTerm(?JsonObject $term): void;
    
    public function setCount(?int $count): void;
    
    public function setProductCount(?int $productCount): void;
}