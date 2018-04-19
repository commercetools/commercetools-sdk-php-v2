<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\TaxCategory;

use Commercetools\Types\TaxCategory\TaxCategoryUpdateActionCollection;


interface TaxCategoryChangeNameActionCollection extends TaxCategoryUpdateActionCollection
{
    /**
     * @param $index
     * @return TaxCategoryChangeNameAction
     */
    public function at($index);

    /**
     * @return TaxCategoryChangeNameAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return TaxCategoryChangeNameAction
     */
    public function map($data, $index);
}
