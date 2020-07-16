<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CartSetCustomerIdAction extends CartUpdateAction
{
    public const FIELD_CUSTOMER_ID = 'customerId';

    /**
     * <p>If set, a customer with the given ID must exist in the project.</p>
     *
     * @return null|string
     */
    public function getCustomerId();

    /**
     * @param ?string $customerId
     */
    public function setCustomerId(?string $customerId): void;
}
