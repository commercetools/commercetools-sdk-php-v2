<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\DiscountCode;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface DiscountCodeSetMaxApplicationsAction extends DiscountCodeUpdateAction
{
    public const FIELD_MAX_APPLICATIONS = 'maxApplications';

    /**
     * <p>Value to set.</p>
     * <p>If omitted, any existing value is removed and the DiscountCode can be applied any number of times.</p>
     * <p>If <code>maxApplicationsPerCustomer</code> is set, each application also counts toward this limit.</p>
     * <p>This field does not limit discount applications for Orders created from a <a href="ctp:api:type:RecurringOrder">Recurring Order</a>.</p>
     *

     * @return null|int
     */
    public function getMaxApplications();

    /**
     * @param ?int $maxApplications
     */
    public function setMaxApplications(?int $maxApplications): void;
}
