<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Common\BaseAddress;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StagedOrderSetBillingAddressAction extends StagedOrderUpdateAction
{
    public const FIELD_ADDRESS = 'address';

    /**
     * <p>Value to set. It replaces the entire address, including <a href="ctp:api:type:CustomFields">Custom Fields</a> if <code>custom</code> is not included. To preserve Custom Fields, include the <code>custom</code> object in the request.</p>
     * <p>If omitted, any existing value is removed.</p>
     *

     * @return null|BaseAddress
     */
    public function getAddress();

    /**
     * @param ?BaseAddress $address
     */
    public function setAddress(?BaseAddress $address): void;
}
