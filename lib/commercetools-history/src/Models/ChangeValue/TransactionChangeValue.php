<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\ChangeValue;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface TransactionChangeValue extends JsonObject
{

    public const FIELD_ID = 'id';
    public const FIELD_INTERACTION_ID = 'interactionId';
    public const FIELD_TIMESTAMP = 'timestamp';

    /**

     * @return null|string
     */
    public function getId();

    /**

     * @return null|string
     */
    public function getInteractionId();

    /**

     * @return null|string
     */
    public function getTimestamp();

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?string $interactionId
     */
    public function setInteractionId(?string $interactionId): void;

    /**
     * @param ?string $timestamp
     */
    public function setTimestamp(?string $timestamp): void;
}
