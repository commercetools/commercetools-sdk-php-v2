<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Types\Customer\CustomerUpdateActionCollection;


interface CustomerRemoveAddressActionCollection extends CustomerUpdateActionCollection
{
    /**
     * @param $index
     * @return CustomerRemoveAddressAction
     */
    public function at($index);

    /**
     * @return CustomerRemoveAddressAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CustomerRemoveAddressAction
     */
    public function map($data, $index);
}
