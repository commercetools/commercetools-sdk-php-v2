<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Category;

use Commercetools\Types\Category\CategoryUpdateActionCollection;


interface CategoryChangeNameActionCollection extends CategoryUpdateActionCollection {
    /**
     * @param $index
     * @return CategoryChangeNameAction
     */
    public function at($index);

    /**
     * @return CategoryChangeNameAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CategoryChangeNameAction
     */
    public function map($data, $index);
}
