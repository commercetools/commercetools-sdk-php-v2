<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Base\Collection;

interface FacetResultRangeCollection extends Collection {
    /**
     * @param $index
     * @return FacetResultRange
     */
    public function at($index);

    /**
     * @return FacetResultRange
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return FacetResultRange
     */
    public function map($data, $index);
}
