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

interface CustomerPasswordTokenCreatedMessage extends Message
{
    public const FIELD_CUSTOMER_ID = 'customerId';
    public const FIELD_EXPIRES_AT = 'expiresAt';

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
     * @param ?string $customerId
     */
    public function setCustomerId(?string $customerId): void;

    /**
     * @param ?DateTimeImmutable $expiresAt
     */
    public function setExpiresAt(?DateTimeImmutable $expiresAt): void;
}
