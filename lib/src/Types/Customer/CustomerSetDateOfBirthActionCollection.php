<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Types\Customer\CustomerUpdateActionCollection;


interface CustomerSetDateOfBirthActionCollection extends CustomerUpdateActionCollection {
    /**
     * @param $index
     * @return CustomerSetDateOfBirthAction
     */
    public function at($index);

    /**
     * @return CustomerSetDateOfBirthAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CustomerSetDateOfBirthAction
     */
    public function map($data, $index);
}
