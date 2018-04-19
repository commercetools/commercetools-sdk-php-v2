<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\UpdateActionCollection;
use Commercetools\Types\Update;

interface ProductUpdate extends Update
{
    /**
     * @return ProductUpdateActionCollection
     */
    public function getActions();

    /**
     * @param ProductUpdateActionCollection $actions
     * @return $this
     */
    public function setActions(UpdateActionCollection $actions);

}
