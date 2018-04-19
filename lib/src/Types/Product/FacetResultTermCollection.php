<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Base\Collection;

interface FacetResultTermCollection extends Collection
{
    /**
     * @param $index
     * @return FacetResultTerm
     */
    public function at($index);

    /**
     * @return FacetResultTerm
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return FacetResultTerm
     */
    public function map($data, $index);
}
