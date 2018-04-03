<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\DiscountCode;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\UpdateModel;

use Commercetools\Types\UpdateActionCollection;
use Commercetools\Types\Update;

class DiscountCodeUpdateModel extends UpdateModel implements DiscountCodeUpdate {
    /**
     * @var DiscountCodeUpdateActionCollection
     */
    protected $actions;

    /**
     * @return DiscountCodeUpdateActionCollection
     */
    public function getActions()
    {
        if (is_null($this->actions)) {
            $value = $this->raw(DiscountCodeUpdate::FIELD_ACTIONS);
            if (is_null($value)) {
                return $this->mapData(DiscountCodeUpdateActionCollection::class, null);
            }
            $value = $this->mapData(DiscountCodeUpdateActionCollection::class, $value);
            $this->actions = $value;
        }
        return $this->actions;
    }

    /**
     * @param DiscountCodeUpdateActionCollection $actions
     * @return $this
     */
    public function setActions(UpdateActionCollection $actions)
    {
        if (!$actions instanceof DiscountCodeUpdateActionCollection) {
            throw new InvalidArgumentException();
        }
        $this->actions = $actions;

        return $this;
    }

}
