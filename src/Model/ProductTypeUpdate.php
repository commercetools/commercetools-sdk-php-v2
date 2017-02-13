<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class ProductTypeUpdate extends Update {
    protected $actions;

    /**
     * @return ProductTypeUpdateActionCollection
     */
    public function getActions(): ProductTypeUpdateActionCollection
    {
        if (is_null($this->actions)) {
            $value = $this->raw('actions');
            if (!is_null($value)) {
                $this->actions = Mapper::map($value, ProductTypeUpdateActionCollection::class);
            } else {
                return Mapper::map([], ProductTypeUpdateActionCollection::class);
            }
        }
        return $this->actions;
    }
                
}
