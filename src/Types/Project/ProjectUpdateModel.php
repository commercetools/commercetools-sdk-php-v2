<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Project;

use Commercetools\Types\UpdateModel;

use Commercetools\Types\UpdateActionCollection;
use Commercetools\Types\Update;

class ProjectUpdateModel extends UpdateModel implements ProjectUpdate {
    /**
     * @var ProjectUpdateActionCollection
     */
    protected $actions;

    /**
     * @return ProjectUpdateActionCollection
     */
    public function getActions()
    {
        if (is_null($this->actions)) {
            $value = $this->raw(ProjectUpdate::FIELD_ACTIONS);
            if (is_null($value)) {
                return $this->mapData(ProjectUpdateActionCollection::class, null);
            }
            $value = $this->mapData(ProjectUpdateActionCollection::class, $value);
            $this->actions = $value;
        }
        return $this->actions;
    }

    /**
     * @param UpdateActionCollection $actions
     * @return $this
     */
    public function setActions(UpdateActionCollection $actions)
    {
        $this->actions = $actions;

        return $this;
    }

}
