<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Category;

use Commercetools\Types\Category\CategoryUpdateActionCollection;


interface CategorySetMetaKeywordsActionCollection extends CategoryUpdateActionCollection
{
    /**
     * @param $index
     * @return CategorySetMetaKeywordsAction
     */
    public function at($index);

    /**
     * @return CategorySetMetaKeywordsAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CategorySetMetaKeywordsAction
     */
    public function map($data, $index);
}
