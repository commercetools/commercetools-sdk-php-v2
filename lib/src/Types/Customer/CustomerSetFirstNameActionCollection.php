<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Types\Customer\CustomerUpdateActionCollection;


interface CustomerSetFirstNameActionCollection extends CustomerUpdateActionCollection {
    /**
     * @param $index
     * @return CustomerSetFirstNameAction
     */
    public function at($index);

    /**
     * @return CustomerSetFirstNameAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CustomerSetFirstNameAction
     */
    public function map($data, $index);
}
