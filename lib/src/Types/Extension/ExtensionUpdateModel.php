<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Extension;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\UpdateModel;

use Commercetools\Types\UpdateActionCollection;
use Commercetools\Types\Update;

class ExtensionUpdateModel extends UpdateModel implements ExtensionUpdate {
    /**
     * @var ExtensionUpdateActionCollection
     */
    protected $actions;

    /**
     * @return ExtensionUpdateActionCollection
     */
    public function getActions()
    {
        if (is_null($this->actions)) {
            $value = $this->raw(ExtensionUpdate::FIELD_ACTIONS);
            if (is_null($value)) {
                return $this->mapData(ExtensionUpdateActionCollection::class, null);
            }
            $value = $this->mapData(ExtensionUpdateActionCollection::class, $value);
            $this->actions = $value;
        }
        return $this->actions;
    }

    /**
     * @param ExtensionUpdateActionCollection $actions
     * @return $this
     */
    public function setActions(UpdateActionCollection $actions)
    {
        if (!$actions instanceof ExtensionUpdateActionCollection) {
            throw new InvalidArgumentException();
        }
        $this->actions = $actions;

        return $this;
    }

}
