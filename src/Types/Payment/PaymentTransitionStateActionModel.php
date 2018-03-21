<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Types\Payment\PaymentUpdateActionModel;

use Commercetools\Types\State\StateReference;

class PaymentTransitionStateActionModel extends PaymentUpdateActionModel implements PaymentTransitionStateAction {
    const DISCRIMINATOR_VALUE = 'transitionState';

    /**
     * @var StateReference
     */
    protected $state;
    /**
     * @var mixed
     */
    protected $force;

    /**
     * @return StateReference
     */
    public function getState()
    {
        if (is_null($this->state)) {
            $value = $this->raw(PaymentTransitionStateAction::FIELD_STATE);
            if (is_null($value)) {
                return $this->mapData(StateReference::class, null);
            }
            $value = $this->mapData(StateReference::class, $value);

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
            $value = $this->raw(PaymentTransitionStateAction::FIELD_FORCE);
            $this->force = $value;
        }
        return $this->force;
    }

    /**
     * @param StateReference $state
     * @return $this
     */
    public function setState(StateReference $state)
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
