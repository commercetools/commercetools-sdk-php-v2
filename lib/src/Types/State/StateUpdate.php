<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\State;

use Commercetools\Types\UpdateActionCollection;
use Commercetools\Types\Update;

interface StateUpdate extends Update {
    /**
     * @return StateUpdateActionCollection
     */
    public function getActions();

    /**
     * @param StateUpdateActionCollection $actions
     * @return $this
     */
    public function setActions(UpdateActionCollection $actions);

}
