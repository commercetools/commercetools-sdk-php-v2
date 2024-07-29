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
     * <p><code>id</code> of an existing <a href="ctp:api:type:Customer">Customer</a>.
     * If the Customer is assigned to a <a href="ctp:api:type:CustomerGroup">CustomerGroup</a>, this update action also sets the value for the <code>customerGroup</code> field.
     * If empty, the update action removes the value for both <code>customerId</code> and <code>customerGroup</code>.</p>
     *

     * @return null|string
     */
    public function getCustomerId();

    /**
     * @param ?string $customerId
     */
    public function setCustomerId(?string $customerId): void;
}
