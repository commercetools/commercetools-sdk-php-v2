<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShippingMethod;

use Commercetools\Types\UpdateActionCollection;
use Commercetools\Types\Update;

interface ShippingMethodUpdate extends Update {
    /**
     * @return ShippingMethodUpdateActionCollection
     */
    public function getActions();

    /**
     * @param ShippingMethodUpdateActionCollection $actions
     * @return $this
     */
    public function setActions(UpdateActionCollection $actions);

}
