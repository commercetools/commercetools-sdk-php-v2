<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductDiscount;

use Commercetools\Types\UpdateModel;

use Commercetools\Types\UpdateActionCollection;
use Commercetools\Types\Update;

class ProductDiscountUpdateModel extends UpdateModel implements ProductDiscountUpdate {
    /**
     * @var ProductDiscountUpdateActionCollection
     */
    protected $actions;

    /**
     * @return ProductDiscountUpdateActionCollection
     */
    public function getActions()
    {
        if (is_null($this->actions)) {
            $value = $this->raw(ProductDiscountUpdate::FIELD_ACTIONS);
            if (is_null($value)) {
                return $this->mapData(ProductDiscountUpdateActionCollection::class, null);
            }
            $value = $this->mapData(ProductDiscountUpdateActionCollection::class, $value);
            $this->actions = $value;
        }
        return $this->actions;
    }

    /**
     * @param ProductDiscountUpdateActionCollection $actions
     * @return $this
     */
    public function setActions(UpdateActionCollection $actions)
    {
        if (!$actions instanceof ProductDiscountUpdateActionCollection) {
            throw new \InvalidArgumentException();
        }
        $this->actions = $actions;

        return $this;
    }

}
