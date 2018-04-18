<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Types\Customer\CustomerUpdateActionCollection;


interface CustomerSetTitleActionCollection extends CustomerUpdateActionCollection {
    /**
     * @param $index
     * @return CustomerSetTitleAction
     */
    public function at($index);

    /**
     * @return CustomerSetTitleAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CustomerSetTitleAction
     */
    public function map($data, $index);
}
