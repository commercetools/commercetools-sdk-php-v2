<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Category;

use Commercetools\Types\Category\CategoryUpdateActionCollection;


interface CategorySetMetaTitleActionCollection extends CategoryUpdateActionCollection
{
    /**
     * @param $index
     * @return CategorySetMetaTitleAction
     */
    public function at($index);

    /**
     * @return CategorySetMetaTitleAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CategorySetMetaTitleAction
     */
    public function map($data, $index);
}
