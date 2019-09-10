<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\State\StateResourceIdentifier;
use DateTimeImmutable;

interface StagedOrderTransitionCustomLineItemStateAction extends StagedOrderUpdateAction
{
    
    const FIELD_CUSTOM_LINE_ITEM_ID = 'customLineItemId';
    const FIELD_QUANTITY = 'quantity';
    const FIELD_FROM_STATE = 'fromState';
    const FIELD_TO_STATE = 'toState';
    const FIELD_ACTUAL_TRANSITION_DATE = 'actualTransitionDate';

    /**
     *
     * @return string|null
     */
    public function getCustomLineItemId();
    
    /**
     *
     * @return int|null
     */
    public function getQuantity();
    
    /**
     *
     * @return StateResourceIdentifier|null
     */
    public function getFromState();
    
    /**
     *
     * @return StateResourceIdentifier|null
     */
    public function getToState();
    
    /**
     *
     * @return DateTimeImmutable|null
     */
    public function getActualTransitionDate();
    public function setCustomLineItemId(?string $customLineItemId): void;
    
    public function setQuantity(?int $quantity): void;
    
    public function setFromState(?StateResourceIdentifier $fromState): void;
    
    public function setToState(?StateResourceIdentifier $toState): void;
    
    public function setActualTransitionDate(?DateTimeImmutable $actualTransitionDate): void;
}