<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Review;

use Commercetools\Types\Review\ReviewUpdateActionModel;

use Commercetools\Types\Common\ResourceIdentifier;

class ReviewSetTargetActionModel extends ReviewUpdateActionModel implements ReviewSetTargetAction {
    const DISCRIMINATOR_VALUE = 'setTarget';

    /**
     * @var ResourceIdentifier
     */
    protected $target;

    /**
     * @return ResourceIdentifier
     */
    public function getTarget()
    {
        if (is_null($this->target)) {
            $value = $this->raw(ReviewSetTargetAction::FIELD_TARGET);
            if (is_null($value)) {
                return $this->mapData(ResourceIdentifier::class, null);
            }
            $value = $this->mapData(ResourceIdentifier::class, $value);

            $this->target = $value;
        }
        return $this->target;
    }

    /**
     * @param ResourceIdentifier $target
     * @return $this
     */
    public function setTarget(ResourceIdentifier $target)
    {
        $this->target = $target;

        return $this;
    }

}
