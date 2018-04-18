<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\TaxCategory;

use Commercetools\Types\TaxCategory\TaxCategoryUpdateActionCollection;


interface TaxCategoryAddTaxRateActionCollection extends TaxCategoryUpdateActionCollection {
    /**
     * @param $index
     * @return TaxCategoryAddTaxRateAction
     */
    public function at($index);

    /**
     * @return TaxCategoryAddTaxRateAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return TaxCategoryAddTaxRateAction
     */
    public function map($data, $index);
}
