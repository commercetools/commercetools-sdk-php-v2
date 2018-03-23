<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Project;

use Commercetools\Types\UpdateActionCollection;
use Commercetools\Types\Update;

interface ProjectUpdate extends Update {
    /**
     * @return ProjectUpdateActionCollection
     */
    public function getActions();

    /**
     * @param ProjectUpdateActionCollection $actions
     * @return $this
     */
    public function setActions(UpdateActionCollection $actions);

}
