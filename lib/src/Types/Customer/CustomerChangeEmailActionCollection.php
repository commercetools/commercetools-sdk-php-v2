<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Types\Customer\CustomerUpdateActionCollection;


interface CustomerChangeEmailActionCollection extends CustomerUpdateActionCollection
{
    /**
     * @param $index
     * @return CustomerChangeEmailAction
     */
    public function at($index);

    /**
     * @return CustomerChangeEmailAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CustomerChangeEmailAction
     */
    public function map($data, $index);
}
