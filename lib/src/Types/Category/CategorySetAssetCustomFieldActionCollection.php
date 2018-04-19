<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Category;

use Commercetools\Types\Category\CategoryUpdateActionCollection;


interface CategorySetAssetCustomFieldActionCollection extends CategoryUpdateActionCollection
{
    /**
     * @param $index
     * @return CategorySetAssetCustomFieldAction
     */
    public function at($index);

    /**
     * @return CategorySetAssetCustomFieldAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CategorySetAssetCustomFieldAction
     */
    public function map($data, $index);
}
