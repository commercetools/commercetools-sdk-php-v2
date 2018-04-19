<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Category;

use Commercetools\Types\Common\Reference;

interface CategoryReference extends Reference
{
    const FIELD_OBJ = 'obj';

    /**
     * @return Category
     */
    public function getObj();

    /**
     * @param Category $obj
     * @return $this
     */
    public function setObj(Category $obj);

}
