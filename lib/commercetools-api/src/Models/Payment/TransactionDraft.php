<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Payment;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\Money;
use DateTimeImmutable;

interface TransactionDraft extends JsonObject
{
    
    const FIELD_TIMESTAMP = 'timestamp';
    const FIELD_TYPE = 'type';
    const FIELD_AMOUNT = 'amount';
    const FIELD_INTERACTION_ID = 'interactionId';
    const FIELD_STATE = 'state';

    /**
     *
     * @return DateTimeImmutable|null
     */
    public function getTimestamp();
    
    /**
     *
     * @return string|null
     */
    public function getType();
    
    /**
     *
     * @return Money|null
     */
    public function getAmount();
    
    /**
     *
     * @return string|null
     */
    public function getInteractionId();
    
    /**
     *
     * @return string|null
     */
    public function getState();
    public function setTimestamp(?DateTimeImmutable $timestamp): void;
    
    public function setType(?string $type): void;
    
    public function setAmount(?Money $amount): void;
    
    public function setInteractionId(?string $interactionId): void;
    
    public function setState(?string $state): void;
}