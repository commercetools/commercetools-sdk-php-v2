<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Types\Customer\CustomerUpdateActionCollection;


interface CustomerSetCustomTypeActionCollection extends CustomerUpdateActionCollection
{
    /**
     * @param $index
     * @return CustomerSetCustomTypeAction
     */
    public function at($index);

    /**
     * @return CustomerSetCustomTypeAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CustomerSetCustomTypeAction
     */
    public function map($data, $index);
}
