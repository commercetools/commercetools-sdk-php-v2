<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\BusinessUnit;

use Commercetools\Api\Models\Common\BaseAddress;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface BusinessUnitChangeAddressAction extends BusinessUnitUpdateAction
{
    public const FIELD_ADDRESS_ID = 'addressId';
    public const FIELD_ADDRESS_KEY = 'addressKey';
    public const FIELD_ADDRESS = 'address';

    /**
     * <p>ID of the address to change. Either <code>addressId</code> or <code>addressKey</code> is required.</p>
     *

     * @return null|string
     */
    public function getAddressId();

    /**
     * <p>Key of the address to change. Either <code>addressId</code> or <code>addressKey</code> is required.</p>
     *

     * @return null|string
     */
    public function getAddressKey();

    /**
     * <p>New address to set.</p>
     *

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
