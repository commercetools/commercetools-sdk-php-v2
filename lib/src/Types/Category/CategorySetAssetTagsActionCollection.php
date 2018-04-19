<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Category;

use Commercetools\Types\Category\CategoryUpdateActionCollection;


interface CategorySetAssetTagsActionCollection extends CategoryUpdateActionCollection
{
    /**
     * @param $index
     * @return CategorySetAssetTagsAction
     */
    public function at($index);

    /**
     * @return CategorySetAssetTagsAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CategorySetAssetTagsAction
     */
    public function map($data, $index);
}
