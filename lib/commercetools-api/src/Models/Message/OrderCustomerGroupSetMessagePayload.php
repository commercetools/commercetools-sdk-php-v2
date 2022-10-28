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

interface OrderCustomerGroupSetMessagePayload extends OrderMessagePayload
{
    public const FIELD_CUSTOMER_GROUP = 'customerGroup';
    public const FIELD_OLD_CUSTOMER_GROUP = 'oldCustomerGroup';

    /**
     * <p><a href="ctp:api:type:CustomerGroup">CustomerGroup</a> on the <a href="ctp:api:type:Order">Order</a> after the <a href="ctp:api:type:StagedOrderSetCustomerGroupAction">Set Customer Group</a> update action.</p>
     *

     * @return null|CustomerGroupReference
     */
    public function getCustomerGroup();

    /**
     * <p><a href="ctp:api:type:CustomerGroup">CustomerGroup</a> on the <a href="ctp:api:type:Order">Order</a> before the <a href="ctp:api:type:StagedOrderSetCustomerGroupAction">Set Customer Group</a> update action.</p>
     *

     * @return null|CustomerGroupReference
     */
    public function getOldCustomerGroup();

    /**
     * @param ?CustomerGroupReference $customerGroup
     */
    public function setCustomerGroup(?CustomerGroupReference $customerGroup): void;

    /**
     * @param ?CustomerGroupReference $oldCustomerGroup
     */
    public function setOldCustomerGroup(?CustomerGroupReference $oldCustomerGroup): void;
}
