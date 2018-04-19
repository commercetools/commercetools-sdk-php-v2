<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Category;

use Commercetools\Types\UpdateActionCollection;
use Commercetools\Types\Update;

interface CategoryUpdate extends Update
{
    /**
     * @return CategoryUpdateActionCollection
     */
    public function getActions();

    /**
     * @param CategoryUpdateActionCollection $actions
     * @return $this
     */
    public function setActions(UpdateActionCollection $actions);

}
