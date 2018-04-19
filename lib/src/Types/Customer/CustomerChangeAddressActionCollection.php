<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Types\Customer\CustomerUpdateActionCollection;


interface CustomerChangeAddressActionCollection extends CustomerUpdateActionCollection
{
    /**
     * @param $index
     * @return CustomerChangeAddressAction
     */
    public function at($index);

    /**
     * @return CustomerChangeAddressAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CustomerChangeAddressAction
     */
    public function map($data, $index);
}
