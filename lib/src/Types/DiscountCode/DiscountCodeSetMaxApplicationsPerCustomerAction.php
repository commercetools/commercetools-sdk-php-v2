<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\DiscountCode;

interface DiscountCodeSetMaxApplicationsPerCustomerAction extends DiscountCodeUpdateAction
{
    const FIELD_MAX_APPLICATIONS_PER_CUSTOMER = 'maxApplicationsPerCustomer';

    /**
     * @return int
     */
    public function getMaxApplicationsPerCustomer();

    /**
     * @param int $maxApplicationsPerCustomer
     * @return $this
     */
    public function setMaxApplicationsPerCustomer(int $maxApplicationsPerCustomer);

}
