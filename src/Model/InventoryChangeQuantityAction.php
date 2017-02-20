<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class InventoryChangeQuantityAction extends InventoryUpdateAction {
    protected $quantity;
    const DISCRIMINATOR_VALUE = 'changeQuantity';

    /**
     * @return int
     */
    public function getQuantity(): int
    {
        if (is_null($this->quantity)) {
            $value = $this->raw('quantity');
            if (!is_null($value)) {
                $this->quantity = (int)$value;
            } else {
                return 0;
            }
        }
        return $this->quantity;
    }
                
}
