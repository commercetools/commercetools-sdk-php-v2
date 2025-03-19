<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Customer\CustomerGroupAssignmentCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CustomerGroupAssignmentsSetMessage extends Message
{
    public const FIELD_CUSTOMER_GROUP_ASSIGNMENTS = 'customerGroupAssignments';

    /**
     * <p>Customer Groups assigned to the Customer during the <a href="ctp:api:type:CustomerSetCustomerGroupAssignmentsAction">Set CustomerGroupAssignments</a> update action.</p>
     *

     * @return null|CustomerGroupAssignmentCollection
     */
    public function getCustomerGroupAssignments();

    /**
     * @param ?CustomerGroupAssignmentCollection $customerGroupAssignments
     */
    public function setCustomerGroupAssignments(?CustomerGroupAssignmentCollection $customerGroupAssignments): void;
}
