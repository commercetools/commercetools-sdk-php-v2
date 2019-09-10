<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\DiscountCode;

interface DiscountCodeSetMaxApplicationsAction extends DiscountCodeUpdateAction
{
    const FIELD_MAX_APPLICATIONS = 'maxApplications';

    /**
     * @return null|int
     */
    public function getMaxApplications();

    public function setMaxApplications(?int $maxApplications): void;
}
