<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\Order\OrderUpdateActionCollection;


interface OrderImportCustomLineItemStateActionCollection extends OrderUpdateActionCollection {
    /**
     * @param $index
     * @return OrderImportCustomLineItemStateAction
     */
    public function at($index);

    /**
     * @return OrderImportCustomLineItemStateAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return OrderImportCustomLineItemStateAction
     */
    public function map($data, $index);
}
