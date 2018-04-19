<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Types\Customer\CustomerUpdateActionCollection;


interface CustomerAddAddressActionCollection extends CustomerUpdateActionCollection
{
    /**
     * @param $index
     * @return CustomerAddAddressAction
     */
    public function at($index);

    /**
     * @return CustomerAddAddressAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CustomerAddAddressAction
     */
    public function map($data, $index);
}
