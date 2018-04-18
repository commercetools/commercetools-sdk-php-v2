<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\TaxCategory;

use Commercetools\Types\TaxCategory\TaxCategoryUpdateActionCollection;


interface TaxCategorySetKeyActionCollection extends TaxCategoryUpdateActionCollection {
    /**
     * @param $index
     * @return TaxCategorySetKeyAction
     */
    public function at($index);

    /**
     * @return TaxCategorySetKeyAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return TaxCategorySetKeyAction
     */
    public function map($data, $index);
}
