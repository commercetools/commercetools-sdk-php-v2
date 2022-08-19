<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Common\Address;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderShippingAddressSetMessage extends OrderMessage
{
    public const FIELD_ADDRESS = 'address';
    public const FIELD_OLD_ADDRESS = 'oldAddress';

    /**
     * <p>Shipping address on the Order after the <a href="ctp:api:type:OrderSetShippingAddressAction">Set Shipping Address</a> update action.</p>
     *

     * @return null|Address
     */
    public function getAddress();

    /**
     * <p>Shipping address on the Order before the <a href="ctp:api:type:OrderSetShippingAddressAction">Set Shipping Address</a> update action.</p>
     *

     * @return null|Address
     */
    public function getOldAddress();

    /**
     * @param ?Address $address
     */
    public function setAddress(?Address $address): void;

    /**
     * @param ?Address $oldAddress
     */
    public function setOldAddress(?Address $oldAddress): void;
}
