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

interface RecurringOrderExpiresAtSetMessage extends Message
{
    public const FIELD_NEW_EXPIRES_AT = 'newExpiresAt';
    public const FIELD_OLD_EXPIRES_AT = 'oldExpiresAt';

    /**
     * <p>Expiration date and time of the Recurring Order after the <a href="ctp:api:type:RecurringOrderSetExpiresAtAction">Set Expires At</a> update action.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getNewExpiresAt();

    /**
     * <p>Expiration date and time of the Recurring Order before the <a href="ctp:api:type:RecurringOrderSetExpiresAtAction">Set Expires At</a> update action.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getOldExpiresAt();

    /**
     * @param ?DateTimeImmutable $newExpiresAt
     */
    public function setNewExpiresAt(?DateTimeImmutable $newExpiresAt): void;

    /**
     * @param ?DateTimeImmutable $oldExpiresAt
     */
    public function setOldExpiresAt(?DateTimeImmutable $oldExpiresAt): void;
}
