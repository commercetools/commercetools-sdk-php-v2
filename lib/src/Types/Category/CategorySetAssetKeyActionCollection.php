<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Category;

use Commercetools\Types\Category\CategoryUpdateActionCollection;


interface CategorySetAssetKeyActionCollection extends CategoryUpdateActionCollection
{
    /**
     * @param $index
     * @return CategorySetAssetKeyAction
     */
    public function at($index);

    /**
     * @return CategorySetAssetKeyAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CategorySetAssetKeyAction
     */
    public function map($data, $index);
}
