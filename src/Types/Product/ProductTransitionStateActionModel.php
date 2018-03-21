<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionModel;

use Commercetools\Types\State\State;

class ProductTransitionStateActionModel extends ProductUpdateActionModel implements ProductTransitionStateAction {
    const DISCRIMINATOR_VALUE = 'transitionState';

    /**
     * @var State
     */
    protected $state;
    /**
     * @var mixed
     */
    protected $force;

    /**
     * @return State
     */
    public function getState()
    {
        if (is_null($this->state)) {
            $value = $this->raw(ProductTransitionStateAction::FIELD_STATE);
            if (is_null($value)) {
                return $this->mapData(State::class, null);
            }
            $value = $this->mapData(State::class, $value);

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
            $value = $this->raw(ProductTransitionStateAction::FIELD_FORCE);
            $this->force = $value;
        }
        return $this->force;
    }

    /**
     * @param State $state
     * @return $this
     */
    public function setState(State $state)
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
