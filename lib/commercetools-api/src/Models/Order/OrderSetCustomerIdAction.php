<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderSetCustomerIdAction extends OrderUpdateAction
{
    public const FIELD_CUSTOMER_ID = 'customerId';

    /**
     * <p><code>id</code> of an existing <a href="ctp:api:type:Customer">Customer</a>.
     * If empty, any existing value is removed.</p>
     *

     * @return null|string
     */
    public function getCustomerId();

    /**
     * @param ?string $customerId
     */
    public function setCustomerId(?string $customerId): void;
}
