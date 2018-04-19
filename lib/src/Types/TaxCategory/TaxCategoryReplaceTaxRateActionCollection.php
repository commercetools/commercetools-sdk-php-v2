<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\TaxCategory;

use Commercetools\Types\TaxCategory\TaxCategoryUpdateActionCollection;


interface TaxCategoryReplaceTaxRateActionCollection extends TaxCategoryUpdateActionCollection
{
    /**
     * @param $index
     * @return TaxCategoryReplaceTaxRateAction
     */
    public function at($index);

    /**
     * @return TaxCategoryReplaceTaxRateAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return TaxCategoryReplaceTaxRateAction
     */
    public function map($data, $index);
}
