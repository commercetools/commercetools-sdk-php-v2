<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Order\Order;
use Commercetools\Api\Models\RecurringOrder\RecurringOrderReference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderCreatedFromRecurringOrderMessage extends OrderMessage
{
    public const FIELD_ORDER = 'order';
    public const FIELD_RECURRING_ORDER_REF = 'recurringOrderRef';

    /**
     * <p><a href="ctp:api:type:Order">Order</a> that was created.</p>
     *

     * @return null|Order
     */
    public function getOrder();

    /**
     * <p>Reference to the origin <a href="ctp:api:type:RecurringOrder">Recurring Order</a>.</p>
     *

     * @return null|RecurringOrderReference
     */
    public function getRecurringOrderRef();

    /**
     * @param ?Order $order
     */
    public function setOrder(?Order $order): void;

    /**
     * @param ?RecurringOrderReference $recurringOrderRef
     */
    public function setRecurringOrderRef(?RecurringOrderReference $recurringOrderRef): void;
}
