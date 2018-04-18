<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Types\Customer\CustomerUpdateActionCollection;


interface CustomerSetLocaleActionCollection extends CustomerUpdateActionCollection {
    /**
     * @param $index
     * @return CustomerSetLocaleAction
     */
    public function at($index);

    /**
     * @return CustomerSetLocaleAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CustomerSetLocaleAction
     */
    public function map($data, $index);
}
