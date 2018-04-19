<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Category;

use Commercetools\Types\Category\CategoryUpdateActionCollection;


interface CategorySetAssetDescriptionActionCollection extends CategoryUpdateActionCollection
{
    /**
     * @param $index
     * @return CategorySetAssetDescriptionAction
     */
    public function at($index);

    /**
     * @return CategorySetAssetDescriptionAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CategorySetAssetDescriptionAction
     */
    public function map($data, $index);
}
