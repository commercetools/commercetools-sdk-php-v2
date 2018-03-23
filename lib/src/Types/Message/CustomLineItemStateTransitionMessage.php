<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\State\StateReference;

interface CustomLineItemStateTransitionMessage extends Message {
    const FIELD_CUSTOM_LINE_ITEM_ID = 'customLineItemId';
    const FIELD_TRANSITION_DATE = 'transitionDate';
    const FIELD_QUANTITY = 'quantity';
    const FIELD_FROM_STATE = 'fromState';
    const FIELD_TO_STATE = 'toState';

    /**
     * @return string
     */
    public function getCustomLineItemId();

    /**
     * @return \DateTimeImmutable
     */
    public function getTransitionDate();

    /**
     * @return int
     */
    public function getQuantity();

    /**
     * @return StateReference
     */
    public function getFromState();

    /**
     * @return StateReference
     */
    public function getToState();

    /**
     * @param string $customLineItemId
     * @return $this
     */
    public function setCustomLineItemId(string $customLineItemId);

    /**
     * @param \DateTimeImmutable $transitionDate
     * @return $this
     */
    public function setTransitionDate($transitionDate);

    /**
     * @param int $quantity
     * @return $this
     */
    public function setQuantity(int $quantity);

    /**
     * @param StateReference $fromState
     * @return $this
     */
    public function setFromState(StateReference $fromState);

    /**
     * @param StateReference $toState
     * @return $this
     */
    public function setToState(StateReference $toState);

}
