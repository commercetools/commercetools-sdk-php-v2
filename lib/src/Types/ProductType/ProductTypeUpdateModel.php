<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Types\UpdateModel;

use Commercetools\Types\UpdateActionCollection;
use Commercetools\Types\Update;

class ProductTypeUpdateModel extends UpdateModel implements ProductTypeUpdate {
    /**
     * @var ProductTypeUpdateActionCollection
     */
    protected $actions;

    /**
     * @return ProductTypeUpdateActionCollection
     */
    public function getActions()
    {
        if (is_null($this->actions)) {
            $value = $this->raw(ProductTypeUpdate::FIELD_ACTIONS);
            if (is_null($value)) {
                return $this->mapData(ProductTypeUpdateActionCollection::class, null);
            }
            $value = $this->mapData(ProductTypeUpdateActionCollection::class, $value);
            $this->actions = $value;
        }
        return $this->actions;
    }

    /**
     * @param ProductTypeUpdateActionCollection $actions
     * @return $this
     */
    public function setActions(UpdateActionCollection $actions)
    {
        if (!$actions instanceof ProductTypeUpdateActionCollection) {
            throw new \InvalidArgumentException();
        }
        $this->actions = $actions;

        return $this;
    }

}
