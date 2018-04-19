<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Base\Collection;

interface FacetResultsCollection extends Collection
{
    /**
     * @param $index
     * @return FacetResults
     */
    public function at($index);

    /**
     * @return FacetResults
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return FacetResults
     */
    public function map($data, $index);
}
