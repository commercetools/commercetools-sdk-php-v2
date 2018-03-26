<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Category;

use Commercetools\Types\UpdateModel;

use Commercetools\Types\UpdateActionCollection;
use Commercetools\Types\Update;

class CategoryUpdateModel extends UpdateModel implements CategoryUpdate {
    /**
     * @var CategoryUpdateActionCollection
     */
    protected $actions;

    /**
     * @return CategoryUpdateActionCollection
     */
    public function getActions()
    {
        if (is_null($this->actions)) {
            $value = $this->raw(CategoryUpdate::FIELD_ACTIONS);
            if (is_null($value)) {
                return $this->mapData(CategoryUpdateActionCollection::class, null);
            }
            $value = $this->mapData(CategoryUpdateActionCollection::class, $value);
            $this->actions = $value;
        }
        return $this->actions;
    }

    /**
     * @param CategoryUpdateActionCollection $actions
     * @return $this
     */
    public function setActions(UpdateActionCollection $actions)
    {
        if (!$actions instanceof CategoryUpdateActionCollection) {
            throw new \InvalidArgumentException();
        }
        $this->actions = $actions;

        return $this;
    }

}
