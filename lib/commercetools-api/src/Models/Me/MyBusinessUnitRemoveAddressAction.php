<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface MyBusinessUnitRemoveAddressAction extends MyBusinessUnitUpdateAction
{
    public const FIELD_ADDRESS_ID = 'addressId';
    public const FIELD_ADDRESS_KEY = 'addressKey';

    /**
     * <p>ID of the address to be removed. Either <code>addressId</code> or <code>addressKey</code> is required.</p>
     *

     * @return null|string
     */
    public function getAddressId();

    /**
     * <p>Key of the address to be removed. Either <code>addressId</code> or <code>addressKey</code> is required.</p>
     *

     * @return null|string
     */
    public function getAddressKey();

    /**
     * @param ?string $addressId
     */
    public function setAddressId(?string $addressId): void;

    /**
     * @param ?string $addressKey
     */
    public function setAddressKey(?string $addressKey): void;
}
