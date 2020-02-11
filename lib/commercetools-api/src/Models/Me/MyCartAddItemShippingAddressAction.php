<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Api\Models\Common\Address;

interface MyCartAddItemShippingAddressAction extends MyCartUpdateAction
{

    public const FIELD_ADDRESS = 'address';

    /**
     * @return null|Address
     */
    public function getAddress();

    public function setAddress(?Address $address): void;
}
