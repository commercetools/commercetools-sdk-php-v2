<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Api\Models\Common\Address;

interface OrderSetBillingAddressAction extends OrderUpdateAction
{

    public const FIELD_ADDRESS = 'address';

    /**
     * @return null|Address
     */
    public function getAddress();

    public function setAddress(?Address $address): void;
}
