<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

interface FilteredFacetResult extends FacetResult
{
    const FIELD_COUNT = 'count';
    const FIELD_PRODUCT_COUNT = 'productCount';

    /**
     * @return int
     */
    public function getCount();

    /**
     * @return int
     */
    public function getProductCount();

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
