<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Message;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\State\StateReference;
use DateTimeImmutable;

interface LineItemStateTransitionMessage extends Message
{
    
    const FIELD_LINE_ITEM_ID = 'lineItemId';
    const FIELD_TRANSITION_DATE = 'transitionDate';
    const FIELD_QUANTITY = 'quantity';
    const FIELD_FROM_STATE = 'fromState';
    const FIELD_TO_STATE = 'toState';

    /**
     *
     * @return string|null
     */
    public function getLineItemId();
    
    /**
     *
     * @return DateTimeImmutable|null
     */
    public function getTransitionDate();
    
    /**
     *
     * @return int|null
     */
    public function getQuantity();
    
    /**
     *
     * @return StateReference|null
     */
    public function getFromState();
    
    /**
     *
     * @return StateReference|null
     */
    public function getToState();
    public function setLineItemId(?string $lineItemId): void;
    
    public function setTransitionDate(?DateTimeImmutable $transitionDate): void;
    
    public function setQuantity(?int $quantity): void;
    
    public function setFromState(?StateReference $fromState): void;
    
    public function setToState(?StateReference $toState): void;
}