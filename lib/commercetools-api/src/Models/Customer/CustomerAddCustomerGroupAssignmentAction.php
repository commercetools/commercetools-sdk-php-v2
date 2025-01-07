<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CustomerAddCustomerGroupAssignmentAction extends CustomerUpdateAction
{
    public const FIELD_CUSTOMER_GROUP_ASSIGNMENT = 'customerGroupAssignment';

    /**
     * <p>Customer Group to assign to the Customer.</p>
     *

     * @return null|CustomerGroupAssignmentDraft
     */
    public function getCustomerGroupAssignment();

    /**
     * @param ?CustomerGroupAssignmentDraft $customerGroupAssignment
     */
    public function setCustomerGroupAssignment(?CustomerGroupAssignmentDraft $customerGroupAssignment): void;
}
