<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShippingMethod;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\UpdateModel;

use Commercetools\Types\UpdateActionCollection;
use Commercetools\Types\Update;

class ShippingMethodUpdateModel extends UpdateModel implements ShippingMethodUpdate
{
    /**
     * @var ShippingMethodUpdateActionCollection
     */
    protected $actions;

    /**
     * @return ShippingMethodUpdateActionCollection
     */
    public function getActions()
    {
        if (is_null($this->actions)) {
            $value = $this->raw(ShippingMethodUpdate::FIELD_ACTIONS);
            if (is_null($value)) {
                return $this->mapData(ShippingMethodUpdateActionCollection::class, null);
            }
            $value = $this->mapData(ShippingMethodUpdateActionCollection::class, $value);
            $this->actions = $value;
        }
        return $this->actions;
    }

    /**
     * @param ShippingMethodUpdateActionCollection $actions
     * @return $this
     */
    public function setActions(UpdateActionCollection $actions)
    {
        if (!$actions instanceof ShippingMethodUpdateActionCollection) {
            throw new InvalidArgumentException();
        }
        $this->actions = $actions;

        return $this;
    }

}
