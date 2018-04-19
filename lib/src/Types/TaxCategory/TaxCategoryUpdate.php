<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\TaxCategory;

use Commercetools\Types\UpdateActionCollection;
use Commercetools\Types\Update;

interface TaxCategoryUpdate extends Update
{
    /**
     * @return TaxCategoryUpdateActionCollection
     */
    public function getActions();

    /**
     * @param TaxCategoryUpdateActionCollection $actions
     * @return $this
     */
    public function setActions(UpdateActionCollection $actions);

}
