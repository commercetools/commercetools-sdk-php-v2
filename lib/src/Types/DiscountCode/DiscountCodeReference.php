<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\DiscountCode;

use Commercetools\Types\Common\Reference;

interface DiscountCodeReference extends Reference
{
    const FIELD_OBJ = 'obj';

    /**
     * @return DiscountCode
     */
    public function getObj();

    /**
     * @param DiscountCode $obj
     * @return $this
     */
    public function setObj(DiscountCode $obj);

}
