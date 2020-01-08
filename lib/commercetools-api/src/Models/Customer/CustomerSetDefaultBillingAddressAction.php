<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

interface CustomerSetDefaultBillingAddressAction extends CustomerUpdateAction
{
    const FIELD_ADDRESS_ID = 'addressId';

    /**
     * <p>If not defined, the customer's <code>defaultBillingAddress</code> is unset.</p>.
     *
     * @return null|string
     */
    public function getAddressId();

    public function setAddressId(?string $addressId): void;
}
