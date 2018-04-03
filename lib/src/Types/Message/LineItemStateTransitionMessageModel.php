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

class LineItemStateTransitionMessageModel extends MessageModel implements LineItemStateTransitionMessage {
    const DISCRIMINATOR_VALUE = 'LineItemStateTransition';

    /**
     * @var string
     */
    protected $lineItemId;
    /**
     * @var \DateTimeImmutable
     */
    protected $transitionDate;
    /**
     * @var int
     */
    protected $quantity;
    /**
     * @var StateReference
     */
    protected $fromState;
    /**
     * @var StateReference
     */
    protected $toState;

    /**
     * @return string
     */
    public function getLineItemId()
    {
        if (is_null($this->lineItemId)) {
            $value = $this->raw(LineItemStateTransitionMessage::FIELD_LINE_ITEM_ID);
            $value = (string)$value;
            $this->lineItemId = $value;
        }
        return $this->lineItemId;
    }
    /**
     * @return \DateTimeImmutable
     */
    public function getTransitionDate()
    {
        if (is_null($this->transitionDate)) {
            $value = $this->raw(LineItemStateTransitionMessage::FIELD_TRANSITION_DATE);
            $dateTime = \DateTimeImmutable::createFromFormat('Y-m-d?H:i:s.uT', $value);
            $value = $dateTime ? $dateTime : null;

            $this->transitionDate = $value;
        }
        return $this->transitionDate;
    }
    /**
     * @return int
     */
    public function getQuantity()
    {
        if (is_null($this->quantity)) {
            $value = $this->raw(LineItemStateTransitionMessage::FIELD_QUANTITY);
            $value = (int)$value;
            $this->quantity = $value;
        }
        return $this->quantity;
    }
    /**
     * @return StateReference
     */
    public function getFromState()
    {
        if (is_null($this->fromState)) {
            $value = $this->raw(LineItemStateTransitionMessage::FIELD_FROM_STATE);
            if (is_null($value)) {
                return $this->mapData(StateReference::class, null);
            }
            $value = $this->mapData(StateReference::class, $value);

            $this->fromState = $value;
        }
        return $this->fromState;
    }
    /**
     * @return StateReference
     */
    public function getToState()
    {
        if (is_null($this->toState)) {
            $value = $this->raw(LineItemStateTransitionMessage::FIELD_TO_STATE);
            if (is_null($value)) {
                return $this->mapData(StateReference::class, null);
            }
            $value = $this->mapData(StateReference::class, $value);

            $this->toState = $value;
        }
        return $this->toState;
    }

    /**
     * @param string $lineItemId
     * @return $this
     */
    public function setLineItemId(string $lineItemId)
    {
        $this->lineItemId = (string)$lineItemId;

        return $this;
    }
    /**
     * @param \DateTimeImmutable|\DateTime|string $transitionDate
     * @return $this
     */
    public function setTransitionDate($transitionDate)
    {
        if ($transitionDate instanceof \DateTime) {
            $transitionDate = \DateTimeImmutable::createFromMutable($transitionDate);
        }
        if (!$transitionDate instanceof \DateTimeImmutable) {
            $transitionDate = new \DateTimeImmutable($transitionDate);
        }
        $this->$transitionDate = $transitionDate;

        return $this;
    }
    /**
     * @param int $quantity
     * @return $this
     */
    public function setQuantity(int $quantity)
    {
        $this->quantity = (int)$quantity;

        return $this;
    }
    /**
     * @param StateReference $fromState
     * @return $this
     */
    public function setFromState(StateReference $fromState)
    {
        $this->fromState = $fromState;

        return $this;
    }
    /**
     * @param StateReference $toState
     * @return $this
     */
    public function setToState(StateReference $toState)
    {
        $this->toState = $toState;

        return $this;
    }


    public function jsonSerialize() {
        $data = parent::jsonSerialize();
        if (isset($data[LineItemStateTransitionMessage::FIELD_TRANSITION_DATE]) && $data[LineItemStateTransitionMessage::FIELD_TRANSITION_DATE] instanceof \DateTimeImmutable) {
            $data[LineItemStateTransitionMessage::FIELD_TRANSITION_DATE] = $data[LineItemStateTransitionMessage::FIELD_TRANSITION_DATE]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return $data;
    }
}
