<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\DiscountCode;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface DiscountCodeSetMaxApplicationsPerCustomerAction extends DiscountCodeUpdateAction
{

    public const FIELD_MAX_APPLICATIONS_PER_CUSTOMER = 'maxApplicationsPerCustomer';

    /**
     * <p>If the <code>maxApplicationsPerCustomer</code> parameter is not included, the field will be emptied.</p>
     *
     * @return null|int
     */
    public function getMaxApplicationsPerCustomer();

    public function setMaxApplicationsPerCustomer(?int $maxApplicationsPerCustomer): void;
}
