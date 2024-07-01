<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\CustomerGroup\CustomerGroupReference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CustomerGroupAssignmentRemovedMessagePayload extends MessagePayload
{
    public const FIELD_CUSTOMER_GROUP_ASSIGNMENT = 'customerGroupAssignment';

    /**
     * <p><a href="ctp:api:type:CustomerGroupAssignment">CustomerGroupAssignment</a> that was removed during the <a href="ctp:api:type:CustomerRemoveCustomerGroupAssignmentAction">Remove CustomerGroupAssignment</a> update action.</p>
     *

     * @return null|CustomerGroupReference
     */
    public function getCustomerGroupAssignment();

    /**
     * @param ?CustomerGroupReference $customerGroupAssignment
     */
    public function setCustomerGroupAssignment(?CustomerGroupReference $customerGroupAssignment): void;
}
