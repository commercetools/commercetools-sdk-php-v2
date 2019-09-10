<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Order;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\State\StateReference;

interface ItemState extends JsonObject
{
    
    const FIELD_QUANTITY = 'quantity';
    const FIELD_STATE = 'state';

    /**
     *
     * @return int|null
     */
    public function getQuantity();
    
    /**
     *
     * @return StateReference|null
     */
    public function getState();
    public function setQuantity(?int $quantity): void;
    
    public function setState(?StateReference $state): void;
}