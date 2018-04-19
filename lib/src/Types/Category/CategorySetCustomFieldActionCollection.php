<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Category;

use Commercetools\Types\Category\CategoryUpdateActionCollection;


interface CategorySetCustomFieldActionCollection extends CategoryUpdateActionCollection
{
    /**
     * @param $index
     * @return CategorySetCustomFieldAction
     */
    public function at($index);

    /**
     * @return CategorySetCustomFieldAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CategorySetCustomFieldAction
     */
    public function map($data, $index);
}
