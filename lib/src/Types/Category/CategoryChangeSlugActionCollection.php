<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Category;

use Commercetools\Types\Category\CategoryUpdateActionCollection;


interface CategoryChangeSlugActionCollection extends CategoryUpdateActionCollection {
    /**
     * @param $index
     * @return CategoryChangeSlugAction
     */
    public function at($index);

    /**
     * @return CategoryChangeSlugAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CategoryChangeSlugAction
     */
    public function map($data, $index);
}
