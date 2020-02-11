<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

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

    public function setReason(?string $reason): void;

    public function setPayloadType(?string $payloadType): void;
}
