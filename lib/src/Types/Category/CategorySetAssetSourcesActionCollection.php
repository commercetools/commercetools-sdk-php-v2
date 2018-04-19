<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Category;

use Commercetools\Types\Category\CategoryUpdateActionCollection;


interface CategorySetAssetSourcesActionCollection extends CategoryUpdateActionCollection
{
    /**
     * @param $index
     * @return CategorySetAssetSourcesAction
     */
    public function at($index);

    /**
     * @return CategorySetAssetSourcesAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CategorySetAssetSourcesAction
     */
    public function map($data, $index);
}
