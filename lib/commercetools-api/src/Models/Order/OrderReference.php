<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderReference extends Reference
{
    public const FIELD_OBJ = 'obj';

    /**
     * @return null|Order
     */
    public function getObj();

    /**
     * @param ?Order $obj
     */
    public function setObj(?Order $obj): void;
}
