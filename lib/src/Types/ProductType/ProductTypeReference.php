<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Types\Common\Reference;

interface ProductTypeReference extends Reference
{
    const FIELD_OBJ = 'obj';

    /**
     * @return ProductType
     */
    public function getObj();

    /**
     * @param ProductType $obj
     * @return $this
     */
    public function setObj(ProductType $obj);

}
