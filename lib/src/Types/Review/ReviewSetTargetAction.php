<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Review;

use Commercetools\Types\Common\ResourceIdentifier;

interface ReviewSetTargetAction extends ReviewUpdateAction
{
    const FIELD_TARGET = 'target';

    /**
     * @return ResourceIdentifier
     */
    public function getTarget();

    /**
     * @param ResourceIdentifier $target
     * @return $this
     */
    public function setTarget(ResourceIdentifier $target);

}
