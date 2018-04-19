<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Types\UpdateActionCollection;
use Commercetools\Types\Update;

interface CustomerUpdate extends Update
{
    /**
     * @return CustomerUpdateActionCollection
     */
    public function getActions();

    /**
     * @param CustomerUpdateActionCollection $actions
     * @return $this
     */
    public function setActions(UpdateActionCollection $actions);

}
