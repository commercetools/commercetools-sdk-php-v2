<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Types\Customer\CustomerUpdateActionCollection;


interface CustomerSetCustomerGroupActionCollection extends CustomerUpdateActionCollection
{
    /**
     * @param $index
     * @return CustomerSetCustomerGroupAction
     */
    public function at($index);

    /**
     * @return CustomerSetCustomerGroupAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CustomerSetCustomerGroupAction
     */
    public function map($data, $index);
}
