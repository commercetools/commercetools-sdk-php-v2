<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Category;

use Commercetools\Types\Category\CategoryUpdateActionCollection;


interface CategorySetCustomTypeActionCollection extends CategoryUpdateActionCollection
{
    /**
     * @param $index
     * @return CategorySetCustomTypeAction
     */
    public function at($index);

    /**
     * @return CategorySetCustomTypeAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CategorySetCustomTypeAction
     */
    public function map($data, $index);
}
