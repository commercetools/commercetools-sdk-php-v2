<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Api\Models\CustomerGroup\CustomerGroupResourceIdentifier;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CustomerGroupAssignmentDraft extends JsonObject
{
    public const FIELD_CUSTOMER_GROUP = 'customerGroup';

    /**
     * <p>ResourceIdentifier of a Customer Group.</p>
     *

     * @return null|CustomerGroupResourceIdentifier
     */
    public function getCustomerGroup();

    /**
     * @param ?CustomerGroupResourceIdentifier $customerGroup
     */
    public function setCustomerGroup(?CustomerGroupResourceIdentifier $customerGroup): void;
}
