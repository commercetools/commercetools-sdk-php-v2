<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Types\UpdateModel;

use Commercetools\Types\UpdateActionCollection;
use Commercetools\Types\Update;

class TypeUpdateModel extends UpdateModel implements TypeUpdate {
    /**
     * @var TypeUpdateActionCollection
     */
    protected $actions;

    /**
     * @return TypeUpdateActionCollection
     */
    public function getActions()
    {
        if (is_null($this->actions)) {
            $value = $this->raw(TypeUpdate::FIELD_ACTIONS);
            if (is_null($value)) {
                return $this->mapData(TypeUpdateActionCollection::class, null);
            }
            $value = $this->mapData(TypeUpdateActionCollection::class, $value);
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
