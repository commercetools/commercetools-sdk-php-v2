<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\TaxCategory;

use Commercetools\Types\UpdateActionCollection;


interface TaxCategoryUpdateActionCollection extends UpdateActionCollection {
    /**
     * @param $index
     * @return TaxCategoryUpdateAction
     */
    public function at($index);

    /**
     * @return TaxCategoryUpdateAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return TaxCategoryUpdateAction
     */
    public function map($data, $index);
}
