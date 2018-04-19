<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Zone;

use Commercetools\Types\UpdateActionCollection;
use Commercetools\Types\Update;

interface ZoneUpdate extends Update
{
    /**
     * @return ZoneUpdateActionCollection
     */
    public function getActions();

    /**
     * @param ZoneUpdateActionCollection $actions
     * @return $this
     */
    public function setActions(UpdateActionCollection $actions);

}
