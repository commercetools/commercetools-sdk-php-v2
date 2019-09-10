<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductDiscount;

use Commercetools\Api\Models\Common\Reference;

interface ProductDiscountReference extends Reference
{
    const FIELD_OBJ = 'obj';

    /**
     * @return null|ProductDiscount
     */
    public function getObj();

    public function setObj(?ProductDiscount $obj): void;
}
