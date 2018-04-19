<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\UpdateActionCollection;
use Commercetools\Types\Update;

interface OrderUpdate extends Update
{
    /**
     * @return OrderUpdateActionCollection
     */
    public function getActions();

    /**
     * @param OrderUpdateActionCollection $actions
     * @return $this
     */
    public function setActions(UpdateActionCollection $actions);

}
