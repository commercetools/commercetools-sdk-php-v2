<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\State\StateReference;

interface OrderTransitionLineItemStateAction extends OrderUpdateAction
{
    const FIELD_ACTUAL_TRANSITION_DATE = 'actualTransitionDate';
    const FIELD_FROM_STATE = 'fromState';
    const FIELD_LINE_ITEM_ID = 'lineItemId';
    const FIELD_QUANTITY = 'quantity';
    const FIELD_TO_STATE = 'toState';

    /**
     * @return \DateTimeImmutable
     */
    public function getActualTransitionDate();

    /**
     * @return StateReference
     */
    public function getFromState();

    /**
     * @return string
     */
    public function getLineItemId();

    /**
     * @return int
     */
    public function getQuantity();

    /**
     * @return StateReference
     */
    public function getToState();

    /**
     * @param \DateTimeImmutable $actualTransitionDate
     * @return $this
     */
    public function setActualTransitionDate($actualTransitionDate);

    /**
     * @param StateReference $fromState
     * @return $this
     */
    public function setFromState(StateReference $fromState);

    /**
     * @param string $lineItemId
     * @return $this
     */
    public function setLineItemId(string $lineItemId);

    /**
     * @param int $quantity
     * @return $this
     */
    public function setQuantity(int $quantity);

    /**
     * @param StateReference $toState
     * @return $this
     */
    public function setToState(StateReference $toState);

}
