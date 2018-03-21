<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Types\UpdateActionCollection;
use Commercetools\Types\Update;

interface TypeUpdate extends Update {
    /**
     * @return array
     */
    public function getActions();

    /**
     * @param array $actions
     * @return $this
     */
    public function setActions(UpdateActionCollection $actions);

}
