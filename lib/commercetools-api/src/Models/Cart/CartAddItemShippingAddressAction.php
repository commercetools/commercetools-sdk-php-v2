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

interface CartAddItemShippingAddressAction extends CartUpdateAction
{
    public const FIELD_ADDRESS = 'address';

    /**
     * <p>Address to append to <code>itemShippingAddresses</code>.</p>
     * <p>The new Address must have a <code>key</code> that is unique accross this Cart.</p>
     *

     * @return null|BaseAddress
     */
    public function getAddress();

    /**
     * @param ?BaseAddress $address
     */
    public function setAddress(?BaseAddress $address): void;
}
