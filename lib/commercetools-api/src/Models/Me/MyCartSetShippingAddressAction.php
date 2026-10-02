<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\Common\BaseAddress;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface MyCartSetShippingAddressAction extends MyCartUpdateAction
{
    public const FIELD_ADDRESS = 'address';

    /**
     * <p>Value to set. It replaces the entire address, including <a href="ctp:api:type:CustomFields">Custom Fields</a> if <code>custom</code> is not included. To preserve Custom Fields, include the <code>custom</code> object in the request.</p>
     * <p>If not set, the shipping address is unset, and the <code>taxedPrice</code> and <code>taxRate</code> are unset in all Line Items.</p>
     *

     * @return null|BaseAddress
     */
    public function getAddress();

    /**
     * @param ?BaseAddress $address
     */
    public function setAddress(?BaseAddress $address): void;
}
