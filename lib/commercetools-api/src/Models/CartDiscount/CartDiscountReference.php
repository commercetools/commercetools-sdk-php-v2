<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Api\Models\Common\Reference;

interface CartDiscountReference extends Reference
{
    const FIELD_OBJ = 'obj';

    /**
     * @return null|CartDiscount
     */
    public function getObj();

    public function setObj(?CartDiscount $obj): void;
}
