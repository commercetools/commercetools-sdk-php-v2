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

interface RecurringOrderNowRequestedMessage extends Message
{
    public const FIELD_REQUESTED_AT = 'requestedAt';
    public const FIELD_REASON = 'reason';

    /**
     * <p>Date and time (UTC) the early Order was requested.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getRequestedAt();

    /**
     * <p>Note provided in the <a href="ctp:api:type:RecurringOrderRequestOrderNowAction">Request Order Now</a> update action.</p>
     *

     * @return null|string
     */
    public function getReason();

    /**
     * @param ?DateTimeImmutable $requestedAt
     */
    public function setRequestedAt(?DateTimeImmutable $requestedAt): void;

    /**
     * @param ?string $reason
     */
    public function setReason(?string $reason): void;
}
