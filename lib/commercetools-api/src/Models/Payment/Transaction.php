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
     * <p>Unique identifier of the Transaction.</p>
     *

     * @return null|string
     */
    public function getId();

    /**
     * <p>Date and time (UTC) the Transaction took place.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getTimestamp();

    /**
     * <p>Type of the Transaction. For example, <code>Authorization</code>.</p>
     *

     * @return null|string
     */
    public function getType();

    /**
     * <p>Money value of the Transaction.</p>
     *

     * @return null|TypedMoney
     */
    public function getAmount();

    /**
     * <p>Identifier used by the interface that manages the Transaction (usually the PSP).
     * If a matching interaction was logged in the <code>interfaceInteractions</code> array, the corresponding interaction can be found with this ID.</p>
     *

     * @return null|string
     */
    public function getInteractionId();

    /**
     * <p>State of the Transaction.</p>
     *

     * @return null|string
     */
    public function getState();

    /**
     * <p>Custom Fields defined for the Transaction.</p>
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
