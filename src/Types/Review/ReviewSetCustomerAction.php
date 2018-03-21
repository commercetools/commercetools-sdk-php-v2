<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Review;

use Commercetools\Types\Common\ResourceIdentifier;

interface ReviewSetCustomerAction extends ReviewUpdateAction {
    const FIELD_CUSTOMER = 'customer';

    /**
     * @return ResourceIdentifier
     */
    public function getCustomer();

    /**
     * @param ResourceIdentifier $customer
     * @return $this
     */
    public function setCustomer(ResourceIdentifier $customer);

}
