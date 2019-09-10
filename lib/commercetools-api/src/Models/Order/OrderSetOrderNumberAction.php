<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Order;

use Commercetools\Base\JsonObject;

interface OrderSetOrderNumberAction extends OrderUpdateAction
{
    
    const FIELD_ORDER_NUMBER = 'orderNumber';

    /**
     *
     * @return string|null
     */
    public function getOrderNumber();
    public function setOrderNumber(?string $orderNumber): void;
}