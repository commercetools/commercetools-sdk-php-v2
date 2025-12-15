<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\BusinessUnit;

use Commercetools\Api\Models\Customer\CustomerGroupAssignmentDraft;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface BusinessUnitAddCustomerGroupAssignmentAction extends BusinessUnitUpdateAction
{
    public const FIELD_CUSTOMER_GROUP_ASSIGNMENT = 'customerGroupAssignment';

    /**
     * <p>Customer Group to assign the Business Unit to.</p>
     *

     * @return null|CustomerGroupAssignmentDraft
     */
    public function getCustomerGroupAssignment();

    /**
     * @param ?CustomerGroupAssignmentDraft $customerGroupAssignment
     */
    public function setCustomerGroupAssignment(?CustomerGroupAssignmentDraft $customerGroupAssignment): void;
}
