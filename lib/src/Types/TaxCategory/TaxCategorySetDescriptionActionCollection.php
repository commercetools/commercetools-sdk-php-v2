<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\TaxCategory;

use Commercetools\Types\TaxCategory\TaxCategoryUpdateActionCollection;


interface TaxCategorySetDescriptionActionCollection extends TaxCategoryUpdateActionCollection
{
    /**
     * @param $index
     * @return TaxCategorySetDescriptionAction
     */
    public function at($index);

    /**
     * @return TaxCategorySetDescriptionAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return TaxCategorySetDescriptionAction
     */
    public function map($data, $index);
}
