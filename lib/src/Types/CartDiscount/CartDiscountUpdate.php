<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

use Commercetools\Types\UpdateActionCollection;
use Commercetools\Types\Update;

interface CartDiscountUpdate extends Update {
    /**
     * @return CartDiscountUpdateActionCollection
     */
    public function getActions();

    /**
     * @param CartDiscountUpdateActionCollection $actions
     * @return $this
     */
    public function setActions(UpdateActionCollection $actions);

}
