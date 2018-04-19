<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Types\Customer\CustomerUpdateActionCollection;


interface CustomerAddBillingAddressIdActionCollection extends CustomerUpdateActionCollection
{
    /**
     * @param $index
     * @return CustomerAddBillingAddressIdAction
     */
    public function at($index);

    /**
     * @return CustomerAddBillingAddressIdAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CustomerAddBillingAddressIdAction
     */
    public function map($data, $index);
}
