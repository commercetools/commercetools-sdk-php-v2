<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Category;

use Commercetools\Types\Category\CategoryUpdateActionCollection;


interface CategoryRemoveAssetActionCollection extends CategoryUpdateActionCollection
{
    /**
     * @param $index
     * @return CategoryRemoveAssetAction
     */
    public function at($index);

    /**
     * @return CategoryRemoveAssetAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CategoryRemoveAssetAction
     */
    public function map($data, $index);
}
