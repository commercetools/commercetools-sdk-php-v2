<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Types\Customer\CustomerUpdateActionCollection;


interface CustomerSetDefaultShippingAddressActionCollection extends CustomerUpdateActionCollection {
    /**
     * @param $index
     * @return CustomerSetDefaultShippingAddressAction
     */
    public function at($index);

    /**
     * @return CustomerSetDefaultShippingAddressAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CustomerSetDefaultShippingAddressAction
     */
    public function map($data, $index);
}
