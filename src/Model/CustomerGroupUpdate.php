<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class CustomerGroupUpdate extends Update {
    protected $actions;

    /**
     * @return CustomerGroupUpdateActionCollection
     */
    public function getActions(): CustomerGroupUpdateActionCollection
    {
        if (is_null($this->actions)) {
            $value = $this->raw('actions');
            if (!is_null($value)) {
                $this->actions = Mapper::map($value, CustomerGroupUpdateActionCollection::class);
            } else {
                return Mapper::map([], CustomerGroupUpdateActionCollection::class);
            }
        }
        return $this->actions;
    }
                
}
