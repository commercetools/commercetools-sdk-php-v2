<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Base\Collection;

interface CustomerUpdateActionCollection extends Collection {
    /**
     * @param $index
     * @return CustomerUpdateAction
     */
    public function at($index);

    /**
     * @return CustomerUpdateAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CustomerUpdateAction
     */
    public function map($data, $index);
}
