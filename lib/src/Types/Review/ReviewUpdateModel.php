<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Review;

use Commercetools\Types\UpdateModel;

use Commercetools\Types\UpdateActionCollection;
use Commercetools\Types\Update;

class ReviewUpdateModel extends UpdateModel implements ReviewUpdate {
    /**
     * @var ReviewUpdateActionCollection
     */
    protected $actions;

    /**
     * @return ReviewUpdateActionCollection
     */
    public function getActions()
    {
        if (is_null($this->actions)) {
            $value = $this->raw(ReviewUpdate::FIELD_ACTIONS);
            if (is_null($value)) {
                return $this->mapData(ReviewUpdateActionCollection::class, null);
            }
            $value = $this->mapData(ReviewUpdateActionCollection::class, $value);
            $this->actions = $value;
        }
        return $this->actions;
    }

    /**
     * @param ReviewUpdateActionCollection $actions
     * @return $this
     */
    public function setActions(UpdateActionCollection $actions)
    {
        if (!$actions instanceof ReviewUpdateActionCollection) {
            throw new \InvalidArgumentException();
        }
        $this->actions = $actions;

        return $this;
    }

}
