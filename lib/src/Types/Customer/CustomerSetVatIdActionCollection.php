<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Types\Customer\CustomerUpdateActionCollection;


interface CustomerSetVatIdActionCollection extends CustomerUpdateActionCollection
{
    /**
     * @param $index
     * @return CustomerSetVatIdAction
     */
    public function at($index);

    /**
     * @return CustomerSetVatIdAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CustomerSetVatIdAction
     */
    public function map($data, $index);
}
