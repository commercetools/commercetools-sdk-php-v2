<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Types\Customer\CustomerUpdateActionCollection;


interface CustomerAddShippingAddressIdActionCollection extends CustomerUpdateActionCollection {
    /**
     * @param $index
     * @return CustomerAddShippingAddressIdAction
     */
    public function at($index);

    /**
     * @return CustomerAddShippingAddressIdAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CustomerAddShippingAddressIdAction
     */
    public function map($data, $index);
}
