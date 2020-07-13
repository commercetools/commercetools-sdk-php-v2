<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductDiscount;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductDiscountReference extends Reference
{
    public const FIELD_OBJ = 'obj';

    /**
     * @return null|ProductDiscount
     */
    public function getObj();

    /**
     * @param ?ProductDiscount $obj
     */
    public function setObj(?ProductDiscount $obj): void;
}
