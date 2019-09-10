<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;

interface StagedOrderSetOrderNumberAction extends StagedOrderUpdateAction
{
    
    const FIELD_ORDER_NUMBER = 'orderNumber';

    /**
     *
     * @return string|null
     */
    public function getOrderNumber();
    public function setOrderNumber(?string $orderNumber): void;
}