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

interface MyCartSetBillingAddressAction extends MyCartUpdateAction
{
    public const FIELD_ADDRESS = 'address';

    /**
     * <p>Value to set.
     * If empty, any existing value is removed.</p>
     *

     * @return null|BaseAddress
     */
    public function getAddress();

    /**
     * @param ?BaseAddress $address
     */
    public function setAddress(?BaseAddress $address): void;
}
