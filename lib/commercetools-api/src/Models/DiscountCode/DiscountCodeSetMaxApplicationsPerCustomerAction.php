<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\DiscountCode;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface DiscountCodeSetMaxApplicationsPerCustomerAction extends DiscountCodeUpdateAction
{
    public const FIELD_MAX_APPLICATIONS_PER_CUSTOMER = 'maxApplicationsPerCustomer';

    /**
     * <p>Value to set. If empty, any existing value will be removed.</p>
     *
     * @return null|int
     */
    public function getMaxApplicationsPerCustomer();

    /**
     * @param ?int $maxApplicationsPerCustomer
     */
    public function setMaxApplicationsPerCustomer(?int $maxApplicationsPerCustomer): void;
}
