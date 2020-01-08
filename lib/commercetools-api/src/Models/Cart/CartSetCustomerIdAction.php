<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

interface CartSetCustomerIdAction extends CartUpdateAction
{
    const FIELD_CUSTOMER_ID = 'customerId';

    /**
     * <p>If set, a customer with the given ID must exist in the project.</p>.
     *
     * @return null|string
     */
    public function getCustomerId();

    public function setCustomerId(?string $customerId): void;
}
