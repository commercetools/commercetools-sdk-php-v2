<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Base\JsonObjectModel;

use Commercetools\Types\State\StateReference;

class ItemStateModel extends JsonObjectModel implements ItemState {
    /**
     * @var int
     */
    protected $quantity;
    /**
     * @var StateReference
     */
    protected $state;

    /**
     * @return int
     */
    public function getQuantity()
    {
        if (is_null($this->quantity)) {
            $value = $this->raw(ItemState::FIELD_QUANTITY);
            $value = (int)$value;
            $this->quantity = $value;
        }
        return $this->quantity;
    }
    /**
     * @return StateReference
     */
    public function getState()
    {
        if (is_null($this->state)) {
            $value = $this->raw(ItemState::FIELD_STATE);
            if (is_null($value)) {
                return $this->mapData(StateReference::class, null);
            }
            $value = $this->mapData(StateReference::class, $value);

            $this->state = $value;
        }
        return $this->state;
    }

    /**
     * @param int $quantity
     * @return $this
     */
    public function setQuantity(int $quantity)
    {
        $this->quantity = (int)$quantity;

        return $this;
    }
    /**
     * @param StateReference $state
     * @return $this
     */
    public function setState(StateReference $state)
    {
        $this->state = $state;

        return $this;
    }

}
