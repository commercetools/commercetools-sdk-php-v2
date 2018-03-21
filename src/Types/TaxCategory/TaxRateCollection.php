<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\TaxCategory;

use Commercetools\Base\Collection;

interface TaxRateCollection extends Collection {
    /**
     * @param $index
     * @return TaxRate
     */
    public function at($index);

    /**
     * @return TaxRate
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return TaxRate
     */
    public function map($data, $index);
}
