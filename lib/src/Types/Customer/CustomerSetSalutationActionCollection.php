<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Types\Customer\CustomerUpdateActionCollection;


interface CustomerSetSalutationActionCollection extends CustomerUpdateActionCollection {
    /**
     * @param $index
     * @return CustomerSetSalutationAction
     */
    public function at($index);

    /**
     * @return CustomerSetSalutationAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CustomerSetSalutationAction
     */
    public function map($data, $index);
}
