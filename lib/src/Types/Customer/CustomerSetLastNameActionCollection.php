<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Types\Customer\CustomerUpdateActionCollection;


interface CustomerSetLastNameActionCollection extends CustomerUpdateActionCollection {
    /**
     * @param $index
     * @return CustomerSetLastNameAction
     */
    public function at($index);

    /**
     * @return CustomerSetLastNameAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CustomerSetLastNameAction
     */
    public function map($data, $index);
}
