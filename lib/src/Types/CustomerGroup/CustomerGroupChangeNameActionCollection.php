<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CustomerGroup;

use Commercetools\Types\CustomerGroup\CustomerGroupUpdateActionCollection;


interface CustomerGroupChangeNameActionCollection extends CustomerGroupUpdateActionCollection {
    /**
     * @param $index
     * @return CustomerGroupChangeNameAction
     */
    public function at($index);

    /**
     * @return CustomerGroupChangeNameAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CustomerGroupChangeNameAction
     */
    public function map($data, $index);
}
