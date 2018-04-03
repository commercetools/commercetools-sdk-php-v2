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

class CustomLineItemStateTransitionMessageModel extends MessageModel implements CustomLineItemStateTransitionMessage {
    const DISCRIMINATOR_VALUE = 'CustomLineItemStateTransition';

    /**
     * @var string
     */
    protected $customLineItemId;
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
    public function getCustomLineItemId()
    {
        if (is_null($this->customLineItemId)) {
            $value = $this->raw(CustomLineItemStateTransitionMessage::FIELD_CUSTOM_LINE_ITEM_ID);
            $value = (string)$value;
            $this->customLineItemId = $value;
        }
        return $this->customLineItemId;
    }
    /**
     * @return \DateTimeImmutable
     */
    public function getTransitionDate()
    {
        if (is_null($this->transitionDate)) {
            $value = $this->raw(CustomLineItemStateTransitionMessage::FIELD_TRANSITION_DATE);
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
            $value = $this->raw(CustomLineItemStateTransitionMessage::FIELD_QUANTITY);
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
            $value = $this->raw(CustomLineItemStateTransitionMessage::FIELD_FROM_STATE);
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
            $value = $this->raw(CustomLineItemStateTransitionMessage::FIELD_TO_STATE);
            if (is_null($value)) {
                return $this->mapData(StateReference::class, null);
            }
            $value = $this->mapData(StateReference::class, $value);

            $this->toState = $value;
        }
        return $this->toState;
    }

    /**
     * @param string $customLineItemId
     * @return $this
     */
    public function setCustomLineItemId(string $customLineItemId)
    {
        $this->customLineItemId = (string)$customLineItemId;

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
        if (isset($data[CustomLineItemStateTransitionMessage::FIELD_TRANSITION_DATE]) && $data[CustomLineItemStateTransitionMessage::FIELD_TRANSITION_DATE] instanceof \DateTimeImmutable) {
            $data[CustomLineItemStateTransitionMessage::FIELD_TRANSITION_DATE] = $data[CustomLineItemStateTransitionMessage::FIELD_TRANSITION_DATE]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return $data;
    }
}
