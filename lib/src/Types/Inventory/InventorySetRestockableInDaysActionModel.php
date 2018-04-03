<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Inventory;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Inventory\InventoryEntryUpdateActionModel;

class InventorySetRestockableInDaysActionModel extends InventoryEntryUpdateActionModel implements InventorySetRestockableInDaysAction {
    const DISCRIMINATOR_VALUE = 'setRestockableInDays';

    /**
     * @var int
     */
    protected $restockableInDays;

    /**
     * @return int
     */
    public function getRestockableInDays()
    {
        if (is_null($this->restockableInDays)) {
            $value = $this->raw(InventorySetRestockableInDaysAction::FIELD_RESTOCKABLE_IN_DAYS);
            $value = (int)$value;
            $this->restockableInDays = $value;
        }
        return $this->restockableInDays;
    }

    /**
     * @param int $restockableInDays
     * @return $this
     */
    public function setRestockableInDays(int $restockableInDays)
    {
        $this->restockableInDays = (int)$restockableInDays;

        return $this;
    }

}
