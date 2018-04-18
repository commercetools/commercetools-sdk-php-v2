<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\TaxCategory;

use Commercetools\Types\TaxCategory\TaxCategoryUpdateActionCollection;


interface TaxCategoryRemoveTaxRateActionCollection extends TaxCategoryUpdateActionCollection {
    /**
     * @param $index
     * @return TaxCategoryRemoveTaxRateAction
     */
    public function at($index);

    /**
     * @return TaxCategoryRemoveTaxRateAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return TaxCategoryRemoveTaxRateAction
     */
    public function map($data, $index);
}
