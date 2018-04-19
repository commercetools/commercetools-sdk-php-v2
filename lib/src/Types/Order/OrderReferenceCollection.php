<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\Common\ReferenceCollection;


interface OrderReferenceCollection extends ReferenceCollection
{
    /**
     * @param $index
     * @return OrderReference
     */
    public function at($index);

    /**
     * @return OrderReference
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return OrderReference
     */
    public function map($data, $index);
}
