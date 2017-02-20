<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class ProductDiscountUpdate extends Update {
    protected $actions;

    /**
     * @return ProductDiscountUpdateActionCollection
     */
    public function getActions(): ProductDiscountUpdateActionCollection
    {
        if (is_null($this->actions)) {
            $value = $this->raw('actions');
            if (!is_null($value)) {
                $this->actions = Mapper::map($value, ProductDiscountUpdateActionCollection::class);
            } else {
                return Mapper::map([], ProductDiscountUpdateActionCollection::class);
            }
        }
        return $this->actions;
    }
                
}
