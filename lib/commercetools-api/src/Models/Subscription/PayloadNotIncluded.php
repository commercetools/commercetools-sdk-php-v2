<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface PayloadNotIncluded extends JsonObject
{
    public const FIELD_REASON = 'reason';
    public const FIELD_PAYLOAD_TYPE = 'payloadType';

    /**
     * @return null|string
     */
    public function getReason();

    /**
     * @return null|string
     */
    public function getPayloadType();

    /**
     * @param ?string $reason
     */
    public function setReason(?string $reason): void;

    /**
     * @param ?string $payloadType
     */
    public function setPayloadType(?string $payloadType): void;
}
