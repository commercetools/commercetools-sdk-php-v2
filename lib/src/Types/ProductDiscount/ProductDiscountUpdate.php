<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductDiscount;

use Commercetools\Types\UpdateActionCollection;
use Commercetools\Types\Update;

interface ProductDiscountUpdate extends Update {
    /**
     * @return ProductDiscountUpdateActionCollection
     */
    public function getActions();

    /**
     * @param ProductDiscountUpdateActionCollection $actions
     * @return $this
     */
    public function setActions(UpdateActionCollection $actions);

}
