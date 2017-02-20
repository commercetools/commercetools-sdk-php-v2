<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class InventoryUpdate extends Update {
    protected $actions;

    /**
     * @return InventoryUpdateActionCollection
     */
    public function getActions(): InventoryUpdateActionCollection
    {
        if (is_null($this->actions)) {
            $value = $this->raw('actions');
            if (!is_null($value)) {
                $this->actions = Mapper::map($value, InventoryUpdateActionCollection::class);
            } else {
                return Mapper::map([], InventoryUpdateActionCollection::class);
            }
        }
        return $this->actions;
    }
                
}
