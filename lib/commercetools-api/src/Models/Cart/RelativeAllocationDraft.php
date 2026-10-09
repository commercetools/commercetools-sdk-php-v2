<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface RelativeAllocationDraft extends AllocationDraft
{
    public const FIELD_PERCENTAGE = 'percentage';

    /**
     * <p>Percentage of the Order total allocated to the Payment Method. For example, <code>100</code> allocates the entire Order total.</p>
     *

     * @return null|int
     */
    public function getPercentage();

    /**
     * @param ?int $percentage
     */
    public function setPercentage(?int $percentage): void;
}
