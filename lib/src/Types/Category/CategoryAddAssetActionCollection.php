<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Category;

use Commercetools\Types\Category\CategoryUpdateActionCollection;


interface CategoryAddAssetActionCollection extends CategoryUpdateActionCollection {
    /**
     * @param $index
     * @return CategoryAddAssetAction
     */
    public function at($index);

    /**
     * @return CategoryAddAssetAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CategoryAddAssetAction
     */
    public function map($data, $index);
}
