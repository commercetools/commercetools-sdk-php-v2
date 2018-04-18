<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\TaxCategory;

use Commercetools\Types\Common\ReferenceCollection;


interface TaxCategoryReferenceCollection extends ReferenceCollection {
    /**
     * @param $index
     * @return TaxCategoryReference
     */
    public function at($index);

    /**
     * @return TaxCategoryReference
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return TaxCategoryReference
     */
    public function map($data, $index);
}
