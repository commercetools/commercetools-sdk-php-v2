<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Api\Models\Common\TypedMoney;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface Transaction extends JsonObject
{
    const FIELD_ID = 'id';
    const FIELD_TIMESTAMP = 'timestamp';
    const FIELD_TYPE = 'type';
    const FIELD_AMOUNT = 'amount';
    const FIELD_INTERACTION_ID = 'interactionId';
    const FIELD_STATE = 'state';

    /**
     * <p>The unique ID of this object.</p>
     *
     * @return null|string
     */
    public function getId();

    /**
     * <p>The time at which the transaction took place.</p>
     *
     * @return null|DateTimeImmutable
     */
    public function getTimestamp();

    /**
     * <p>The type of this transaction.</p>
     *
     * @return null|string
     */
    public function getType();

    /**
     * @return null|TypedMoney
     */
    public function getAmount();

    /**
     * <p>The identifier that is used by the interface that managed the transaction (usually the PSP).
     * If a matching interaction was logged in the <code>interfaceInteractions</code> array, the corresponding interaction should be findable with this ID.</p>
     *
     * @return null|string
     */
    public function getInteractionId();

    /**
     * <p>The state of this transaction.</p>
     *
     * @return null|string
     */
    public function getState();

    public function setId(?string $id): void;

    public function setTimestamp(?DateTimeImmutable $timestamp): void;

    public function setType(?string $type): void;

    public function setAmount(?TypedMoney $amount): void;

    public function setInteractionId(?string $interactionId): void;

    public function setState(?string $state): void;
}
