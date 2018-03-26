<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Base\Collection;

interface CustomerCollection extends Collection {
    /**
     * @param $index
     * @return Customer
     */
    public function at($index);

    /**
     * @return Customer
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return Customer
     */
    public function map($data, $index);

    /**
     * @param string $id
     * @return Customer
     */
    public function byId($id);
}
