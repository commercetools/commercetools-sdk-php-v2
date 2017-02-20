<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class InventorySetRestockableInDaysAction extends InventoryUpdateAction {
    protected $restockableInDays;
    const DISCRIMINATOR_VALUE = 'setRestockableInDays';

    /**
     * @return int
     */
    public function getRestockableInDays(): int
    {
        if (is_null($this->restockableInDays)) {
            $value = $this->raw('restockableInDays');
            if (!is_null($value)) {
                $this->restockableInDays = (int)$value;
            } else {
                return 0;
            }
        }
        return $this->restockableInDays;
    }
                
}
