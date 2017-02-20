<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class ZoneUpdate extends Update {
    protected $actions;

    /**
     * @return ZoneUpdateActionCollection
     */
    public function getActions(): ZoneUpdateActionCollection
    {
        if (is_null($this->actions)) {
            $value = $this->raw('actions');
            if (!is_null($value)) {
                $this->actions = Mapper::map($value, ZoneUpdateActionCollection::class);
            } else {
                return Mapper::map([], ZoneUpdateActionCollection::class);
            }
        }
        return $this->actions;
    }
                
}
