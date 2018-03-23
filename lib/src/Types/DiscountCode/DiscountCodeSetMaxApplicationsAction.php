<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\DiscountCode;

interface DiscountCodeSetMaxApplicationsAction extends DiscountCodeUpdateAction {
    const FIELD_MAX_APPLICATIONS = 'maxApplications';

    /**
     * @return int
     */
    public function getMaxApplications();

    /**
     * @param int $maxApplications
     * @return $this
     */
    public function setMaxApplications(int $maxApplications);

}
