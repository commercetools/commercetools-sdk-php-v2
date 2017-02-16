<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class StateUpdate extends Update {
    protected $actions;

    /**
     * @return StateUpdateActionCollection
     */
    public function getActions(): StateUpdateActionCollection
    {
        if (is_null($this->actions)) {
            $value = $this->raw('actions');
            if (!is_null($value)) {
                $this->actions = Mapper::map($value, StateUpdateActionCollection::class);
            } else {
                return Mapper::map([], StateUpdateActionCollection::class);
            }
        }
        return $this->actions;
    }
                
}
