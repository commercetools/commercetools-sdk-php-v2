<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\Order\OrderUpdateActionCollection;


interface OrderSetParcelMeasurementsActionCollection extends OrderUpdateActionCollection
{
    /**
     * @param $index
     * @return OrderSetParcelMeasurementsAction
     */
    public function at($index);

    /**
     * @return OrderSetParcelMeasurementsAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return OrderSetParcelMeasurementsAction
     */
    public function map($data, $index);
}
