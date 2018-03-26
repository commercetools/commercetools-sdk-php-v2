<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\UpdateModel;

use Commercetools\Types\UpdateActionCollection;
use Commercetools\Types\Update;

class CartUpdateModel extends UpdateModel implements CartUpdate {
    /**
     * @var CartUpdateActionCollection
     */
    protected $actions;

    /**
     * @return CartUpdateActionCollection
     */
    public function getActions()
    {
        if (is_null($this->actions)) {
            $value = $this->raw(CartUpdate::FIELD_ACTIONS);
            if (is_null($value)) {
                return $this->mapData(CartUpdateActionCollection::class, null);
            }
            $value = $this->mapData(CartUpdateActionCollection::class, $value);
            $this->actions = $value;
        }
        return $this->actions;
    }

    /**
     * @param CartUpdateActionCollection $actions
     * @return $this
     */
    public function setActions(UpdateActionCollection $actions)
    {
        if (!$actions instanceof CartUpdateActionCollection) {
            throw new \InvalidArgumentException();
        }
        $this->actions = $actions;

        return $this;
    }

}
