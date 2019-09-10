<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Order;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\Reference;

interface OrderReference extends Reference
{
    
    const FIELD_OBJ = 'obj';

    /**
     *
     * @return Order|null
     */
    public function getObj();
    public function setObj(?Order $obj): void;
}