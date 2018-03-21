<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\Order\OrderUpdateActionModel;

use Commercetools\Types\State\StateReference;

class OrderTransitionLineItemStateActionModel extends OrderUpdateActionModel implements OrderTransitionLineItemStateAction {
    const DISCRIMINATOR_VALUE = 'transitionLineItemState';

    /**
     * @var \DateTimeImmutable
     */
    protected $actualTransitionDate;
    /**
     * @var StateReference
     */
    protected $fromState;
    /**
     * @var string
     */
    protected $lineItemId;
    /**
     * @var int
     */
    protected $quantity;
    /**
     * @var StateReference
     */
    protected $toState;

    /**
     * @return \DateTimeImmutable
     */
    public function getActualTransitionDate()
    {
        if (is_null($this->actualTransitionDate)) {
            $value = $this->raw(OrderTransitionLineItemStateAction::FIELD_ACTUAL_TRANSITION_DATE);
            $dateTime = \DateTimeImmutable::createFromFormat('Y-m-d?H:i:s.uT', $value);
            $value = $dateTime ? $dateTime : null;

            $this->actualTransitionDate = $value;
        }
        return $this->actualTransitionDate;
    }
    /**
     * @return StateReference
     */
    public function getFromState()
    {
        if (is_null($this->fromState)) {
            $value = $this->raw(OrderTransitionLineItemStateAction::FIELD_FROM_STATE);
            if (is_null($value)) {
                return $this->mapData(StateReference::class, null);
            }
            $value = $this->mapData(StateReference::class, $value);

            $this->fromState = $value;
        }
        return $this->fromState;
    }
    /**
     * @return string
     */
    public function getLineItemId()
    {
        if (is_null($this->lineItemId)) {
            $value = $this->raw(OrderTransitionLineItemStateAction::FIELD_LINE_ITEM_ID);
            $value = (string)$value;
            $this->lineItemId = $value;
        }
        return $this->lineItemId;
    }
    /**
     * @return int
     */
    public function getQuantity()
    {
        if (is_null($this->quantity)) {
            $value = $this->raw(OrderTransitionLineItemStateAction::FIELD_QUANTITY);
            $value = (int)$value;
            $this->quantity = $value;
        }
        return $this->quantity;
    }
    /**
     * @return StateReference
     */
    public function getToState()
    {
        if (is_null($this->toState)) {
            $value = $this->raw(OrderTransitionLineItemStateAction::FIELD_TO_STATE);
            if (is_null($value)) {
                return $this->mapData(StateReference::class, null);
            }
            $value = $this->mapData(StateReference::class, $value);

            $this->toState = $value;
        }
        return $this->toState;
    }

    /**
     * @param \DateTimeImmutable|\DateTime|string $actualTransitionDate
     * @return $this
     */
    public function setActualTransitionDate($actualTransitionDate)
    {
        if ($actualTransitionDate instanceof \DateTime) {
            $actualTransitionDate = \DateTimeImmutable::createFromMutable($actualTransitionDate);
        }
        if (!$actualTransitionDate instanceof \DateTimeImmutable) {
            $actualTransitionDate = new \DateTimeImmutable($actualTransitionDate);
        }
        $this->$actualTransitionDate = $actualTransitionDate;

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
     * @param string $lineItemId
     * @return $this
     */
    public function setLineItemId(string $lineItemId)
    {
        $this->lineItemId = (string)$lineItemId;

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
        if (isset($data[OrderTransitionLineItemStateAction::FIELD_ACTUAL_TRANSITION_DATE]) && $data[OrderTransitionLineItemStateAction::FIELD_ACTUAL_TRANSITION_DATE] instanceof \DateTimeImmutable) {
            $data[OrderTransitionLineItemStateAction::FIELD_ACTUAL_TRANSITION_DATE] = $data[OrderTransitionLineItemStateAction::FIELD_ACTUAL_TRANSITION_DATE]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return $data;
    }
}
