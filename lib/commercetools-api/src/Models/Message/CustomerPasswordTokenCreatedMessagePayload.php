<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface CustomerPasswordTokenCreatedMessagePayload extends MessagePayload
{
    public const FIELD_CUSTOMER_ID = 'customerId';
    public const FIELD_EXPIRES_AT = 'expiresAt';
    public const FIELD_VALUE = 'value';
    public const FIELD_INVALIDATE_OLDER_TOKENS = 'invalidateOlderTokens';

    /**
     * <p>Unique identifier of the Customer.</p>
     *

     * @return null|string
     */
    public function getCustomerId();

    /**
     * <p>Date and time (UTC) the password token expires.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getExpiresAt();

    /**
     * <p>Value of the token, present only if the token's validity is 60 minutes or less.</p>
     *

     * @return null|string
     */
    public function getValue();

    /**
     * <p>If <code>true</code>, all password tokens issued previously for the Customer are invalidated.</p>
     *

     * @return null|bool
     */
    public function getInvalidateOlderTokens();

    /**
     * @param ?string $customerId
     */
    public function setCustomerId(?string $customerId): void;

    /**
     * @param ?DateTimeImmutable $expiresAt
     */
    public function setExpiresAt(?DateTimeImmutable $expiresAt): void;

    /**
     * @param ?string $value
     */
    public function setValue(?string $value): void;

    /**
     * @param ?bool $invalidateOlderTokens
     */
    public function setInvalidateOlderTokens(?bool $invalidateOlderTokens): void;
}
