<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\DiscountCode;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\DiscountCode\DiscountCodeUpdateActionModel;

class DiscountCodeSetMaxApplicationsPerCustomerActionModel extends DiscountCodeUpdateActionModel implements DiscountCodeSetMaxApplicationsPerCustomerAction {
    const DISCRIMINATOR_VALUE = 'setMaxApplicationsPerCustomer';

    /**
     * @var int
     */
    protected $maxApplicationsPerCustomer;

    /**
     * @return int
     */
    public function getMaxApplicationsPerCustomer()
    {
        if (is_null($this->maxApplicationsPerCustomer)) {
            $value = $this->raw(DiscountCodeSetMaxApplicationsPerCustomerAction::FIELD_MAX_APPLICATIONS_PER_CUSTOMER);
            $value = (int)$value;
            $this->maxApplicationsPerCustomer = $value;
        }
        return $this->maxApplicationsPerCustomer;
    }

    /**
     * @param int $maxApplicationsPerCustomer
     * @return $this
     */
    public function setMaxApplicationsPerCustomer(int $maxApplicationsPerCustomer)
    {
        $this->maxApplicationsPerCustomer = (int)$maxApplicationsPerCustomer;

        return $this;
    }

}
