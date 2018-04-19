<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

interface OrderSetOrderNumberAction extends OrderUpdateAction
{
    const FIELD_ORDER_NUMBER = 'orderNumber';

    /**
     * @return string
     */
    public function getOrderNumber();

    /**
     * @param string $orderNumber
     * @return $this
     */
    public function setOrderNumber(string $orderNumber);

}
