<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\FacetResultCollection;


interface FilteredFacetResultCollection extends FacetResultCollection
{
    /**
     * @param $index
     * @return FilteredFacetResult
     */
    public function at($index);

    /**
     * @return FilteredFacetResult
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return FilteredFacetResult
     */
    public function map($data, $index);
}
