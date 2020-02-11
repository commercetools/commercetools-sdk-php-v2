<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface MyCustomerSetDefaultBillingAddressAction extends MyCustomerUpdateAction
{
    public const FIELD_ADDRESS_ID = 'addressId';

    /**
     * @return null|string
     */
    public function getAddressId();

    public function setAddressId(?string $addressId): void;
}
