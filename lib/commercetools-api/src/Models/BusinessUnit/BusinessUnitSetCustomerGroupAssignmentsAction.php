<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\BusinessUnit;

use Commercetools\Api\Models\Customer\CustomerGroupAssignmentDraftCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface BusinessUnitSetCustomerGroupAssignmentsAction extends BusinessUnitUpdateAction
{
    public const FIELD_CUSTOMER_GROUP_ASSIGNMENTS = 'customerGroupAssignments';

    /**
     * <p>Customer Groups to assign the Business Unit to.</p>
     *

     * @return null|CustomerGroupAssignmentDraftCollection
     */
    public function getCustomerGroupAssignments();

    /**
     * @param ?CustomerGroupAssignmentDraftCollection $customerGroupAssignments
     */
    public function setCustomerGroupAssignments(?CustomerGroupAssignmentDraftCollection $customerGroupAssignments): void;
}
