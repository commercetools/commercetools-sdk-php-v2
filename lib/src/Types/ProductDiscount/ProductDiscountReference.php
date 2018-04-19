<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductDiscount;

use Commercetools\Types\Common\Reference;

interface ProductDiscountReference extends Reference
{
    const FIELD_OBJ = 'obj';

    /**
     * @return ProductDiscount
     */
    public function getObj();

    /**
     * @param ProductDiscount $obj
     * @return $this
     */
    public function setObj(ProductDiscount $obj);

}
