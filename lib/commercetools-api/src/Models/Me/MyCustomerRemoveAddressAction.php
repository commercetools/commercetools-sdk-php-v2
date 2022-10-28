<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface MyCustomerRemoveAddressAction extends MyCustomerUpdateAction
{
    public const FIELD_ADDRESS_ID = 'addressId';
    public const FIELD_ADDRESS_KEY = 'addressKey';

    /**
     * <p><code>id</code> of the <a href="ctp:api:type:Address">Address</a> to remove.</p>
     *

     * @return null|string
     */
    public function getAddressId();

    /**
     * <p><code>key</code> of the <a href="ctp:api:type:Address">Address</a> to remove.</p>
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
