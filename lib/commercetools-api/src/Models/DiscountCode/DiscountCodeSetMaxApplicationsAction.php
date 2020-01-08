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
     * <p>If the <code>maxApplications</code> parameter is not included, the field will be emptied.</p>.
     *
     * @return null|int
     */
    public function getMaxApplications();

    public function setMaxApplications(?int $maxApplications): void;
}
