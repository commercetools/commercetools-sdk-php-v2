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

interface CustomerGroupAssignmentAddedMessage extends Message
{
    public const FIELD_CUSTOMER_GROUP_ASSIGNMENT = 'customerGroupAssignment';

    /**
     * <p>Customer Group assigned to the Customer during the <a href="ctp:api:type:CustomerAddCustomerGroupAssignmentAction">Add CustomerGroupAssignment</a> update action.</p>
     *

     * @return null|CustomerGroupAssignment
     */
    public function getCustomerGroupAssignment();

    /**
     * @param ?CustomerGroupAssignment $customerGroupAssignment
     */
    public function setCustomerGroupAssignment(?CustomerGroupAssignment $customerGroupAssignment): void;
}
