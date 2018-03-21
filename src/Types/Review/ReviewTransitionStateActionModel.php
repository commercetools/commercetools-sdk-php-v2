<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Review;

use Commercetools\Types\Review\ReviewUpdateActionModel;

use Commercetools\Types\Common\ResourceIdentifier;

class ReviewTransitionStateActionModel extends ReviewUpdateActionModel implements ReviewTransitionStateAction {
    const DISCRIMINATOR_VALUE = 'transitionState';

    /**
     * @var ResourceIdentifier
     */
    protected $state;
    /**
     * @var mixed
     */
    protected $force;

    /**
     * @return ResourceIdentifier
     */
    public function getState()
    {
        if (is_null($this->state)) {
            $value = $this->raw(ReviewTransitionStateAction::FIELD_STATE);
            if (is_null($value)) {
                return $this->mapData(ResourceIdentifier::class, null);
            }
            $value = $this->mapData(ResourceIdentifier::class, $value);

            $this->state = $value;
        }
        return $this->state;
    }
    /**
     * @return mixed
     */
    public function getForce()
    {
        if (is_null($this->force)) {
            $value = $this->raw(ReviewTransitionStateAction::FIELD_FORCE);
            $this->force = $value;
        }
        return $this->force;
    }

    /**
     * @param ResourceIdentifier $state
     * @return $this
     */
    public function setState(ResourceIdentifier $state)
    {
        $this->state = $state;

        return $this;
    }
    /**
     * @param $force
     * @return $this
     */
    public function setForce($force)
    {
        $this->force = $force;

        return $this;
    }

}
