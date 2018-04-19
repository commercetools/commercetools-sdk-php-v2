<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Types\Customer\CustomerUpdateActionCollection;


interface CustomerRemoveShippingAddressIdActionCollection extends CustomerUpdateActionCollection
{
    /**
     * @param $index
     * @return CustomerRemoveShippingAddressIdAction
     */
    public function at($index);

    /**
     * @return CustomerRemoveShippingAddressIdAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CustomerRemoveShippingAddressIdAction
     */
    public function map($data, $index);
}
