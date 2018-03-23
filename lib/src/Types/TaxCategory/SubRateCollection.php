<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\TaxCategory;

use Commercetools\Base\Collection;

interface SubRateCollection extends Collection {
    /**
     * @param $index
     * @return SubRate
     */
    public function at($index);

    /**
     * @return SubRate
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return SubRate
     */
    public function map($data, $index);
}
