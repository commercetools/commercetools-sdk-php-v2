<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Api\Models\Common\Reference;

interface ProductReference extends Reference
{
    const FIELD_OBJ = 'obj';

    /**
     * @return null|Product
     */
    public function getObj();

    public function setObj(?Product $obj): void;
}
