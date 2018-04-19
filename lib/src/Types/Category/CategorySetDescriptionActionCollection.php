<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Category;

use Commercetools\Types\Category\CategoryUpdateActionCollection;


interface CategorySetDescriptionActionCollection extends CategoryUpdateActionCollection
{
    /**
     * @param $index
     * @return CategorySetDescriptionAction
     */
    public function at($index);

    /**
     * @return CategorySetDescriptionAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CategorySetDescriptionAction
     */
    public function map($data, $index);
}
