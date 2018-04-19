<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Category;

interface CategoryChangeParentAction extends CategoryUpdateAction
{
    const FIELD_PARENT = 'parent';

    /**
     * @return CategoryReference
     */
    public function getParent();

    /**
     * @param CategoryReference $parent
     * @return $this
     */
    public function setParent(CategoryReference $parent);

}
