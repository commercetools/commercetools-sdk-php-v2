<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\UpdateModel;

use Commercetools\Types\UpdateActionCollection;
use Commercetools\Types\Update;

class ProductUpdateModel extends UpdateModel implements ProductUpdate {
    /**
     * @var ProductUpdateActionCollection
     */
    protected $actions;

    /**
     * @return ProductUpdateActionCollection
     */
    public function getActions()
    {
        if (is_null($this->actions)) {
            $value = $this->raw(ProductUpdate::FIELD_ACTIONS);
            if (is_null($value)) {
                return $this->mapData(ProductUpdateActionCollection::class, null);
            }
            $value = $this->mapData(ProductUpdateActionCollection::class, $value);
            $this->actions = $value;
        }
        return $this->actions;
    }

    /**
     * @param UpdateActionCollection $actions
     * @return $this
     */
    public function setActions(UpdateActionCollection $actions)
    {
        $this->actions = $actions;

        return $this;
    }

}
