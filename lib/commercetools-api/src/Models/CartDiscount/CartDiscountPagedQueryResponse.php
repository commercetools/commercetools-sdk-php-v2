<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Base\JsonObject;

interface CartDiscountPagedQueryResponse extends JsonObject
{
    
    const FIELD_COUNT = 'count';
    const FIELD_TOTAL = 'total';
    const FIELD_OFFSET = 'offset';
    const FIELD_RESULTS = 'results';

    /**
     *
     * @return int|null
     */
    public function getCount();
    
    /**
     *
     * @return int|null
     */
    public function getTotal();
    
    /**
     *
     * @return int|null
     */
    public function getOffset();
    
    /**
     *
     * @return CartDiscountCollection|null
     */
    public function getResults();
    public function setCount(?int $count): void;
    
    public function setTotal(?int $total): void;
    
    public function setOffset(?int $offset): void;
    
    public function setResults(?CartDiscountCollection $results): void;
}