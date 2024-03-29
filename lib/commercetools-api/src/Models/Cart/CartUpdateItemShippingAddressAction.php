<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\BaseAddress;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CartUpdateItemShippingAddressAction extends CartUpdateAction
{
    public const FIELD_ADDRESS = 'address';

    /**
     * <p>The new Address with the same <code>key</code> as the Address it will replace.</p>
     *

     * @return null|BaseAddress
     */
    public function getAddress();

    /**
     * @param ?BaseAddress $address
     */
    public function setAddress(?BaseAddress $address): void;
}
