<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Channel;

use Commercetools\Types\UpdateModel;

use Commercetools\Types\UpdateActionCollection;
use Commercetools\Types\Update;

class ChannelUpdateModel extends UpdateModel implements ChannelUpdate {
    /**
     * @var array
     */
    protected $actions;

    /**
     * @return array
     */
    public function getActions()
    {
        if (is_null($this->actions)) {
            $value = $this->raw(ChannelUpdate::FIELD_ACTIONS);
            $value = (array)$value;
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
