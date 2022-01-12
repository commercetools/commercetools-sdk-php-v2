<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Api\Models\Common\TypedMoney;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface Transaction extends JsonObject
{
    public const FIELD_ID = 'id';
    public const FIELD_TIMESTAMP = 'timestamp';
    public const FIELD_TYPE = 'type';
    public const FIELD_AMOUNT = 'amount';
    public const FIELD_INTERACTION_ID = 'interactionId';
    public const FIELD_STATE = 'state';
    public const FIELD_CUSTOM = 'custom';

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

    /**
     * <p>Custom Fields for the Transaction.</p>
     *
     * @return null|CustomFields
     */
    public function getCustom();

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?DateTimeImmutable $timestamp
     */
    public function setTimestamp(?DateTimeImmutable $timestamp): void;

    /**
     * @param ?string $type
     */
    public function setType(?string $type): void;

    /**
     * @param ?TypedMoney $amount
     */
    public function setAmount(?TypedMoney $amount): void;

    /**
     * @param ?string $interactionId
     */
    public function setInteractionId(?string $interactionId): void;

    /**
     * @param ?string $state
     */
    public function setState(?string $state): void;

    /**
     * @param ?CustomFields $custom
     */
    public function setCustom(?CustomFields $custom): void;
}
