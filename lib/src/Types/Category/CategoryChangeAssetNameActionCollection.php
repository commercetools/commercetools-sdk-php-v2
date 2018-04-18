<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Category;

use Commercetools\Types\Category\CategoryUpdateActionCollection;


interface CategoryChangeAssetNameActionCollection extends CategoryUpdateActionCollection {
    /**
     * @param $index
     * @return CategoryChangeAssetNameAction
     */
    public function at($index);

    /**
     * @return CategoryChangeAssetNameAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CategoryChangeAssetNameAction
     */
    public function map($data, $index);
}
