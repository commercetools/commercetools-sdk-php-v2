<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Category;

use Commercetools\Types\Category\CategoryUpdateActionCollection;


interface CategoryChangeAssetOrderActionCollection extends CategoryUpdateActionCollection
{
    /**
     * @param $index
     * @return CategoryChangeAssetOrderAction
     */
    public function at($index);

    /**
     * @return CategoryChangeAssetOrderAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CategoryChangeAssetOrderAction
     */
    public function map($data, $index);
}
