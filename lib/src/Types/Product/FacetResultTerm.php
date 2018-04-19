<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Base\JsonObject;

interface FacetResultTerm extends JsonObject
{
    const FIELD_TERM = 'term';
    const FIELD_COUNT = 'count';
    const FIELD_PRODUCT_COUNT = 'productCount';

    /**
     * @return mixed
     */
    public function getTerm();

    /**
     * @return int
     */
    public function getCount();

    /**
     * @return int
     */
    public function getProductCount();

    /**
     * @param mixed $term
     * @return $this
     */
    public function setTerm($term);

    /**
     * @param int $count
     * @return $this
     */
    public function setCount(int $count);

    /**
     * @param int $productCount
     * @return $this
     */
    public function setProductCount(int $productCount);

}
