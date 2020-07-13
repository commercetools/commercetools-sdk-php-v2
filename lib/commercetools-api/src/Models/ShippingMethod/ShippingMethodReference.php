<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ShippingMethodReference extends Reference
{
    public const FIELD_OBJ = 'obj';

    /**
     * @return null|ShippingMethod
     */
    public function getObj();

    /**
     * @param ?ShippingMethod $obj
     */
    public function setObj(?ShippingMethod $obj): void;
}
