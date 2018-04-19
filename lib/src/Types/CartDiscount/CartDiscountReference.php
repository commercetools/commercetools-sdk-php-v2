<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

use Commercetools\Types\Common\Reference;

interface CartDiscountReference extends Reference
{
    const FIELD_OBJ = 'obj';

    /**
     * @return CartDiscount
     */
    public function getObj();

    /**
     * @param CartDiscount $obj
     * @return $this
     */
    public function setObj(CartDiscount $obj);

}
