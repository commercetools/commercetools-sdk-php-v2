<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\BusinessUnit;

use Commercetools\Api\Models\Common\BaseAddress;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface BusinessUnitAddAddressAction extends BusinessUnitUpdateAction
{
    public const FIELD_ADDRESS = 'address';

    /**
     * <p>Address to add to the addresses of the <a href="ctp:api:type:BusinessUnit">Business Unit</a>.</p>
     *

     * @return null|BaseAddress
     */
    public function getAddress();

    /**
     * @param ?BaseAddress $address
     */
    public function setAddress(?BaseAddress $address): void;
}
