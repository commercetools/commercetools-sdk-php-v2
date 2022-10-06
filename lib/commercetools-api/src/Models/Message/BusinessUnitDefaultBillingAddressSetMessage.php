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

interface BusinessUnitDefaultBillingAddressSetMessage extends Message
{
    public const FIELD_ADDRESS = 'address';

    /**
     * <p>The address that was set as the default billing address.</p>
     *

     * @return null|Address
     */
    public function getAddress();

    /**
     * @param ?Address $address
     */
    public function setAddress(?Address $address): void;
}
