<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Types\Customer\CustomerUpdateActionCollection;


interface CustomerSetDefaultBillingAddressActionCollection extends CustomerUpdateActionCollection {
    /**
     * @param $index
     * @return CustomerSetDefaultBillingAddressAction
     */
    public function at($index);

    /**
     * @return CustomerSetDefaultBillingAddressAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CustomerSetDefaultBillingAddressAction
     */
    public function map($data, $index);
}
