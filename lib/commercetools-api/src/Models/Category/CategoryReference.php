<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Category;

use Commercetools\Api\Models\Common\Reference;

interface CategoryReference extends Reference
{
    const FIELD_OBJ = 'obj';

    /**
     * @return null|Category
     */
    public function getObj();

    public function setObj(?Category $obj): void;
}
