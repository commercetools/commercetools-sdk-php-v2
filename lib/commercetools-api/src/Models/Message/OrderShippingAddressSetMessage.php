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

interface OrderShippingAddressSetMessage extends Message
{
    public const FIELD_ADDRESS = 'address';
    public const FIELD_OLD_ADDRESS = 'oldAddress';

    /**
     * @return null|Address
     */
    public function getAddress();

    /**
     * @return null|Address
     */
    public function getOldAddress();

    public function setAddress(?Address $address): void;

    public function setOldAddress(?Address $oldAddress): void;
}
