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

interface CustomerGroupAssignmentsSetMessagePayload extends MessagePayload
{
    public const FIELD_CUSTOMER_GROUP_ASSIGNMENTS = 'customerGroupAssignments';
    public const FIELD_OLD_CUSTOMER_GROUP_ASSIGNMENTS = 'oldCustomerGroupAssignments';

    /**
     * <p>Customer Groups assigned to the Customer during the <a href="ctp:api:type:CustomerSetCustomerGroupAssignmentsAction">Set CustomerGroupAssignments</a> update action.</p>
     *

     * @return null|CustomerGroupAssignmentCollection
     */
    public function getCustomerGroupAssignments();

    /**
     * <p>Customer Groups assigned to the Customer before the <a href="ctp:api:type:CustomerSetCustomerGroupAssignmentsAction">Set CustomerGroupAssignments</a> update action.</p>
     *

     * @return null|CustomerGroupAssignmentCollection
     */
    public function getOldCustomerGroupAssignments();

    /**
     * @param ?CustomerGroupAssignmentCollection $customerGroupAssignments
     */
    public function setCustomerGroupAssignments(?CustomerGroupAssignmentCollection $customerGroupAssignments): void;

    /**
     * @param ?CustomerGroupAssignmentCollection $oldCustomerGroupAssignments
     */
    public function setOldCustomerGroupAssignments(?CustomerGroupAssignmentCollection $oldCustomerGroupAssignments): void;
}
