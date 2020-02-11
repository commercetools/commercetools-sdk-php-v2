<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Api\Models\Common\Address;

interface CustomerChangeAddressAction extends CustomerUpdateAction
{

    public const FIELD_ADDRESS_ID = 'addressId';
    public const FIELD_ADDRESS = 'address';

    /**
     * @return null|string
     */
    public function getAddressId();

    /**
     * @return null|Address
     */
    public function getAddress();

    public function setAddressId(?string $addressId): void;

    public function setAddress(?Address $address): void;
}
