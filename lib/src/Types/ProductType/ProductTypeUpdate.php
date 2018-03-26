<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Types\UpdateActionCollection;
use Commercetools\Types\Update;

interface ProductTypeUpdate extends Update {
    /**
     * @return ProductTypeUpdateActionCollection
     */
    public function getActions();

    /**
     * @param ProductTypeUpdateActionCollection $actions
     * @return $this
     */
    public function setActions(UpdateActionCollection $actions);

}
