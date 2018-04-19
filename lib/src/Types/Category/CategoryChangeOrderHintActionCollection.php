<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Category;

use Commercetools\Types\Category\CategoryUpdateActionCollection;


interface CategoryChangeOrderHintActionCollection extends CategoryUpdateActionCollection
{
    /**
     * @param $index
     * @return CategoryChangeOrderHintAction
     */
    public function at($index);

    /**
     * @return CategoryChangeOrderHintAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CategoryChangeOrderHintAction
     */
    public function map($data, $index);
}
