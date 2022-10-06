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

interface BusinessUnitShippingAddressRemovedMessage extends Message
{
    public const FIELD_ADDRESS = 'address';

    /**
     * <p>The address that was removed from shipping addresses of the <a href="ctp:api:type:BusinessUnit">Business Unit</a>.</p>
     *

     * @return null|Address
     */
    public function getAddress();

    /**
     * @param ?Address $address
     */
    public function setAddress(?Address $address): void;
}
