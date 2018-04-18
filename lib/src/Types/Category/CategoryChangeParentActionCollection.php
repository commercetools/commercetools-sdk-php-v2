<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Category;

use Commercetools\Types\Category\CategoryUpdateActionCollection;


interface CategoryChangeParentActionCollection extends CategoryUpdateActionCollection {
    /**
     * @param $index
     * @return CategoryChangeParentAction
     */
    public function at($index);

    /**
     * @return CategoryChangeParentAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CategoryChangeParentAction
     */
    public function map($data, $index);
}
