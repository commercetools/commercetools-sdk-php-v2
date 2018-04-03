<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Message\MessageModel;

use Commercetools\Types\State\StateReference;

class PaymentStatusStateTransitionMessageModel extends MessageModel implements PaymentStatusStateTransitionMessage {
    const DISCRIMINATOR_VALUE = 'PaymentStatusStateTransition';

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
            $value = $this->raw(PaymentStatusStateTransitionMessage::FIELD_STATE);
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
            $value = $this->raw(PaymentStatusStateTransitionMessage::FIELD_FORCE);
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
