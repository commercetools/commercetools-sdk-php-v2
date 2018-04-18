<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\TaxCategory;

use Commercetools\Types\UpdateCollection;


interface TaxCategoryUpdateCollection extends UpdateCollection {
    /**
     * @param $index
     * @return TaxCategoryUpdate
     */
    public function at($index);

    /**
     * @return TaxCategoryUpdate
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return TaxCategoryUpdate
     */
    public function map($data, $index);
}
