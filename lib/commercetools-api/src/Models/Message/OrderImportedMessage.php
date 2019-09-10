<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Message;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Order\Order;

interface OrderImportedMessage extends Message
{
    
    const FIELD_ORDER = 'order';

    /**
     *
     * @return Order|null
     */
    public function getOrder();
    public function setOrder(?Order $order): void;
}