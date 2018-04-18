<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Category;

use Commercetools\Types\Category\CategoryUpdateActionCollection;


interface CategorySetMetaDescriptionActionCollection extends CategoryUpdateActionCollection {
    /**
     * @param $index
     * @return CategorySetMetaDescriptionAction
     */
    public function at($index);

    /**
     * @return CategorySetMetaDescriptionAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CategorySetMetaDescriptionAction
     */
    public function map($data, $index);
}
