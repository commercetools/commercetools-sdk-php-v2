<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Base\JsonObject;

use Commercetools\Types\State\StateReference;

interface ItemState extends JsonObject {
    const FIELD_QUANTITY = 'quantity';
    const FIELD_STATE = 'state';

    /**
     * @return int
     */
    public function getQuantity();

    /**
     * @return StateReference
     */
    public function getState();

    /**
     * @param int $quantity
     * @return $this
     */
    public function setQuantity(int $quantity);

    /**
     * @param StateReference $state
     * @return $this
     */
    public function setState(StateReference $state);

}
