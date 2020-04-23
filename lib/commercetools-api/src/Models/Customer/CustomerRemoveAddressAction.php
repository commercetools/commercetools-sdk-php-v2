<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CustomerRemoveAddressAction extends CustomerUpdateAction
{
    public const FIELD_ADDRESS_ID = 'addressId';
    public const FIELD_ADDRESS_KEY = 'addressKey';

    /**
     * @return null|string
     */
    public function getAddressId();

    /**
     * @return null|string
     */
    public function getAddressKey();

    public function setAddressId(?string $addressId): void;

    public function setAddressKey(?string $addressKey): void;
}
