<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Category;

use Commercetools\Types\Category\CategoryUpdateActionCollection;


interface CategorySetKeyActionCollection extends CategoryUpdateActionCollection {
    /**
     * @param $index
     * @return CategorySetKeyAction
     */
    public function at($index);

    /**
     * @return CategorySetKeyAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CategorySetKeyAction
     */
    public function map($data, $index);
}
