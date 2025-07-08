<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurringOrder;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface RecurringOrderCanceled extends RecurringOrderStateDraft
{
    public const FIELD_REASON = 'reason';

    /**
     * <p>The reason for the cancelation.</p>
     *

     * @return null|string
     */
    public function getReason();

    /**
     * @param ?string $reason
     */
    public function setReason(?string $reason): void;
}
