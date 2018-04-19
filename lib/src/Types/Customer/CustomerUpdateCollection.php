<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Types\UpdateCollection;


interface CustomerUpdateCollection extends UpdateCollection
{
    /**
     * @param $index
     * @return CustomerUpdate
     */
    public function at($index);

    /**
     * @return CustomerUpdate
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CustomerUpdate
     */
    public function map($data, $index);
}
