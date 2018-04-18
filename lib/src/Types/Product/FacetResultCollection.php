<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Base\Collection;

interface FacetResultCollection extends Collection {
    /**
     * @param $index
     * @return FacetResult
     */
    public function at($index);

    /**
     * @return FacetResult
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return FacetResult
     */
    public function map($data, $index);
}
