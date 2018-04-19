<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Types\Customer\CustomerUpdateActionCollection;


interface CustomerSetCustomerNumberActionCollection extends CustomerUpdateActionCollection
{
    /**
     * @param $index
     * @return CustomerSetCustomerNumberAction
     */
    public function at($index);

    /**
     * @return CustomerSetCustomerNumberAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CustomerSetCustomerNumberAction
     */
    public function map($data, $index);
}
