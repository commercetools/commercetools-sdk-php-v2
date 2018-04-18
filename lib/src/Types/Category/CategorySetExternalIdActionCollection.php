<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Category;

use Commercetools\Types\Category\CategoryUpdateActionCollection;


interface CategorySetExternalIdActionCollection extends CategoryUpdateActionCollection {
    /**
     * @param $index
     * @return CategorySetExternalIdAction
     */
    public function at($index);

    /**
     * @return CategorySetExternalIdAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CategorySetExternalIdAction
     */
    public function map($data, $index);
}
