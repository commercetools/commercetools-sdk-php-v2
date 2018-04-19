<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Types\Customer\CustomerUpdateActionCollection;


interface CustomerRemoveBillingAddressIdActionCollection extends CustomerUpdateActionCollection
{
    /**
     * @param $index
     * @return CustomerRemoveBillingAddressIdAction
     */
    public function at($index);

    /**
     * @return CustomerRemoveBillingAddressIdAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CustomerRemoveBillingAddressIdAction
     */
    public function map($data, $index);
}
