<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurringOrder;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface RecurringOrderActive extends RecurringOrderStateDraft
{
    public const FIELD_RESUMES_AT = 'resumesAt';

    /**
     * <p>If set, the Recurring Order will automatically resume at the date and time (UTC) specified.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getResumesAt();

    /**
     * @param ?DateTimeImmutable $resumesAt
     */
    public function setResumesAt(?DateTimeImmutable $resumesAt): void;
}
