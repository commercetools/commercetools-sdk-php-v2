<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\UpdateModel;

use Commercetools\Types\UpdateActionCollection;
use Commercetools\Types\Update;

class CartDiscountUpdateModel extends UpdateModel implements CartDiscountUpdate
{
    /**
     * @var CartDiscountUpdateActionCollection
     */
    protected $actions;

    /**
     * @return CartDiscountUpdateActionCollection
     */
    public function getActions()
    {
        if (is_null($this->actions)) {
            $value = $this->raw(CartDiscountUpdate::FIELD_ACTIONS);
            if (is_null($value)) {
                return $this->mapData(CartDiscountUpdateActionCollection::class, null);
            }
            $value = $this->mapData(CartDiscountUpdateActionCollection::class, $value);
            $this->actions = $value;
        }
        return $this->actions;
    }

    /**
     * @param CartDiscountUpdateActionCollection $actions
     * @return $this
     */
    public function setActions(UpdateActionCollection $actions)
    {
        if (!$actions instanceof CartDiscountUpdateActionCollection) {
            throw new InvalidArgumentException();
        }
        $this->actions = $actions;

        return $this;
    }

}
