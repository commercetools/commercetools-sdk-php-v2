<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Category;

use Commercetools\Types\Category\CategoryUpdateActionCollection;


interface CategorySetAssetCustomTypeActionCollection extends CategoryUpdateActionCollection {
    /**
     * @param $index
     * @return CategorySetAssetCustomTypeAction
     */
    public function at($index);

    /**
     * @return CategorySetAssetCustomTypeAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CategorySetAssetCustomTypeAction
     */
    public function map($data, $index);
}
