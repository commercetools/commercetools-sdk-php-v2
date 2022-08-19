<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Customer\CustomerReference;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupReference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderCustomerSetMessage extends OrderMessage
{
    public const FIELD_CUSTOMER = 'customer';
    public const FIELD_CUSTOMER_GROUP = 'customerGroup';
    public const FIELD_OLD_CUSTOMER = 'oldCustomer';
    public const FIELD_OLD_CUSTOMER_GROUP = 'oldCustomerGroup';

    /**
     * <p><a href="ctp:api:type:Customer">Customer</a> on the <a href="ctp:api:type:Order">Order</a> after the <a href="ctp:api:type:OrderSetCustomerIdAction">Set Customer Id</a> update action.</p>
     *

     * @return null|CustomerReference
     */
    public function getCustomer();

    /**
     * <p><a href="ctp:api:type:CustomerGroup">CustomerGroup</a> on the <a href="ctp:api:type:Order">Order</a> after the <a href="ctp:api:type:OrderSetCustomerIdAction">Set Customer Id</a> update action.</p>
     *

     * @return null|CustomerGroupReference
     */
    public function getCustomerGroup();

    /**
     * <p><a href="ctp:api:type:Customer">Customer</a> on the <a href="ctp:api:type:Order">Order</a> before the <a href="ctp:api:type:OrderSetCustomerIdAction">Set Customer Id</a> update action.</p>
     *

     * @return null|CustomerReference
     */
    public function getOldCustomer();

    /**
     * <p><a href="ctp:api:type:CustomerGroup">CustomerGroup</a> on the <a href="ctp:api:type:Order">Order</a> before the <a href="ctp:api:type:OrderSetCustomerIdAction">Set Customer Id</a> update action.</p>
     *

     * @return null|CustomerGroupReference
     */
    public function getOldCustomerGroup();

    /**
     * @param ?CustomerReference $customer
     */
    public function setCustomer(?CustomerReference $customer): void;

    /**
     * @param ?CustomerGroupReference $customerGroup
     */
    public function setCustomerGroup(?CustomerGroupReference $customerGroup): void;

    /**
     * @param ?CustomerReference $oldCustomer
     */
    public function setOldCustomer(?CustomerReference $oldCustomer): void;

    /**
     * @param ?CustomerGroupReference $oldCustomerGroup
     */
    public function setOldCustomerGroup(?CustomerGroupReference $oldCustomerGroup): void;
}
