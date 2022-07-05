<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\DiscountCode;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface DiscountCodeSetValidUntilAction extends DiscountCodeUpdateAction
{
    public const FIELD_VALID_UNTIL = 'validUntil';

    /**
     * <p>Value to set that must be later than <code>validFrom</code>. If empty, any existing value will be removed.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getValidUntil();

    /**
     * @param ?DateTimeImmutable $validUntil
     */
    public function setValidUntil(?DateTimeImmutable $validUntil): void;
}
