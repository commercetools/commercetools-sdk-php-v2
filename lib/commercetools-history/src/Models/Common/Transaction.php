<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface Transaction extends JsonObject
{

    public const FIELD_ID = 'id';
    public const FIELD_TIMESTAMP = 'timestamp';
    public const FIELD_TYPE = 'type';
    public const FIELD_AMOUNT = 'amount';
    public const FIELD_INTERACTION_ID = 'interactionId';
    public const FIELD_STATE = 'state';

    /**
     * <p>The unique ID of this object.</p>
     *

     * @return null|string
     */
    public function getId();

    /**
     * <p>The time at which the transaction took place.</p>
     *

     * @return null|string
     */
    public function getTimestamp();

    /**

     * @return null|string
     */
    public function getType();

    /**

     * @return null|Money
     */
    public function getAmount();

    /**
     * <p>The identifier that is used by the interface that managed the transaction (usually the PSP). If a matching interaction was logged in the <code>interfaceInteractions</code> array, the corresponding interaction should be findable with this ID.</p>
     *

     * @return null|string
     */
    public function getInteractionId();

    /**

     * @return null|string
     */
    public function getState();

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?string $timestamp
     */
    public function setTimestamp(?string $timestamp): void;

    /**
     * @param ?string $type
     */
    public function setType(?string $type): void;

    /**
     * @param ?Money $amount
     */
    public function setAmount(?Money $amount): void;

    /**
     * @param ?string $interactionId
     */
    public function setInteractionId(?string $interactionId): void;

    /**
     * @param ?string $state
     */
    public function setState(?string $state): void;
}
