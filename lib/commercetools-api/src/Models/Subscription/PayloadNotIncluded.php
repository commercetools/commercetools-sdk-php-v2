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
     * <p>Reason the payload is not included. For example, the payload is too large, or its content is not supported by the Subscription destination.</p>
     *

     * @return null|string
     */
    public function getReason();

    /**
     * <p>Value of the <code>type</code> field in the original payload.</p>
     *

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
