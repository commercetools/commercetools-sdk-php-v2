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

interface CustomerSetCustomerGroupAction extends CustomerUpdateAction
{
    public const FIELD_CUSTOMER_GROUP = 'customerGroup';

    /**
     * <p>If not defined, the customer group is unset.</p>
     *
     * @return null|CustomerGroupResourceIdentifier
     */
    public function getCustomerGroup();

    public function setCustomerGroup(?CustomerGroupResourceIdentifier $customerGroup): void;
}
