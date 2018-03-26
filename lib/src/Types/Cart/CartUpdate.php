<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\UpdateActionCollection;
use Commercetools\Types\Update;

interface CartUpdate extends Update {
    /**
     * @return CartUpdateActionCollection
     */
    public function getActions();

    /**
     * @param CartUpdateActionCollection $actions
     * @return $this
     */
    public function setActions(UpdateActionCollection $actions);

}
