<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\DiscountCode;

use Commercetools\Types\UpdateActionCollection;
use Commercetools\Types\Update;

interface DiscountCodeUpdate extends Update {
    /**
     * @return DiscountCodeUpdateActionCollection
     */
    public function getActions();

    /**
     * @param DiscountCodeUpdateActionCollection $actions
     * @return $this
     */
    public function setActions(UpdateActionCollection $actions);

}
