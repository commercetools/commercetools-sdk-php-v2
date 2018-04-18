<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\Order\OrderUpdateActionCollection;


interface OrderRemovePaymentActionCollection extends OrderUpdateActionCollection {
    /**
     * @param $index
     * @return OrderRemovePaymentAction
     */
    public function at($index);

    /**
     * @return OrderRemovePaymentAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return OrderRemovePaymentAction
     */
    public function map($data, $index);
}
