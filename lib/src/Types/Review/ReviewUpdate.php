<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Review;

use Commercetools\Types\UpdateActionCollection;
use Commercetools\Types\Update;

interface ReviewUpdate extends Update {
    /**
     * @return ReviewUpdateActionCollection
     */
    public function getActions();

    /**
     * @param ReviewUpdateActionCollection $actions
     * @return $this
     */
    public function setActions(UpdateActionCollection $actions);

}
