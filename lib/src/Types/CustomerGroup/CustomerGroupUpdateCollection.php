<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CustomerGroup;

use Commercetools\Types\UpdateCollection;


interface CustomerGroupUpdateCollection extends UpdateCollection
{
    /**
     * @param $index
     * @return CustomerGroupUpdate
     */
    public function at($index);

    /**
     * @return CustomerGroupUpdate
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CustomerGroupUpdate
     */
    public function map($data, $index);
}
