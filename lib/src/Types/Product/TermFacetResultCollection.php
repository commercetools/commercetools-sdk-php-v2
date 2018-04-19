<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\FacetResultCollection;


interface TermFacetResultCollection extends FacetResultCollection
{
    /**
     * @param $index
     * @return TermFacetResult
     */
    public function at($index);

    /**
     * @return TermFacetResult
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return TermFacetResult
     */
    public function map($data, $index);
}
