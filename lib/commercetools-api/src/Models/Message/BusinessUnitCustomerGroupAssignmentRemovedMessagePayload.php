<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Customer\CustomerGroupAssignment;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface BusinessUnitCustomerGroupAssignmentRemovedMessagePayload extends MessagePayload
{
    public const FIELD_CUSTOMER_GROUP_ASSIGNMENT = 'customerGroupAssignment';

    /**
     * <p>Customer Group unassigned from the Business Unit during the <a href="ctp:api:type:BusinessUnitRemoveCustomerGroupAssignmentAction">Remove CustomerGroupAssignment</a> update action.</p>
     *

     * @return null|CustomerGroupAssignment
     */
    public function getCustomerGroupAssignment();

    /**
     * @param ?CustomerGroupAssignment $customerGroupAssignment
     */
    public function setCustomerGroupAssignment(?CustomerGroupAssignment $customerGroupAssignment): void;
}
