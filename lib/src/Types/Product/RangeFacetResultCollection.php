<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\FacetResultCollection;


interface RangeFacetResultCollection extends FacetResultCollection {
    /**
     * @param $index
     * @return RangeFacetResult
     */
    public function at($index);

    /**
     * @return RangeFacetResult
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return RangeFacetResult
     */
    public function map($data, $index);
}
