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

interface CustomerAddressAddedMessage extends Message
{
    public const FIELD_ADDRESS = 'address';

    /**
     * <p><a href="ctp:api:type:Address">Address</a> that was added during the <a href="ctp:api:type:CustomerAddAddressAction">Add Address</a> update action.</p>
     *

     * @return null|Address
     */
    public function getAddress();

    /**
     * @param ?Address $address
     */
    public function setAddress(?Address $address): void;
}
