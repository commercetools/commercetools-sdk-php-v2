<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Api\Models\Common\BaseAddress;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CustomerChangeAddressAction extends CustomerUpdateAction
{
    public const FIELD_ADDRESS_ID = 'addressId';
    public const FIELD_ADDRESS_KEY = 'addressKey';
    public const FIELD_ADDRESS = 'address';

    /**
     * @return null|string
     */
    public function getAddressId();

    /**
     * @return null|string
     */
    public function getAddressKey();

    /**
     * @return null|BaseAddress
     */
    public function getAddress();

    /**
     * @param ?string $addressId
     */
    public function setAddressId(?string $addressId): void;

    /**
     * @param ?string $addressKey
     */
    public function setAddressKey(?string $addressKey): void;

    /**
     * @param ?BaseAddress $address
     */
    public function setAddress(?BaseAddress $address): void;
}
