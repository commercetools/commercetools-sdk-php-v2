<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class TaxCategoryUpdate extends Update {
    protected $actions;

    /**
     * @return TaxCategoryUpdateActionCollection
     */
    public function getActions(): TaxCategoryUpdateActionCollection
    {
        if (is_null($this->actions)) {
            $value = $this->raw('actions');
            if (!is_null($value)) {
                $this->actions = Mapper::map($value, TaxCategoryUpdateActionCollection::class);
            } else {
                return Mapper::map([], TaxCategoryUpdateActionCollection::class);
            }
        }
        return $this->actions;
    }
                
}
