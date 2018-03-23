<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Common\Reference;

interface ProductReference extends Reference {
    const FIELD_OBJ = 'obj';

    /**
     * @return Product
     */
    public function getObj();

    /**
     * @param Product $obj
     * @return $this
     */
    public function setObj(Product $obj);

}
