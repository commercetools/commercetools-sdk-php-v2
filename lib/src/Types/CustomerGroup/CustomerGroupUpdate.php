<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CustomerGroup;

use Commercetools\Types\UpdateActionCollection;
use Commercetools\Types\Update;

interface CustomerGroupUpdate extends Update
{
    /**
     * @return CustomerGroupUpdateActionCollection
     */
    public function getActions();

    /**
     * @param CustomerGroupUpdateActionCollection $actions
     * @return $this
     */
    public function setActions(UpdateActionCollection $actions);

}
