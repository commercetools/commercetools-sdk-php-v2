<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Category;

use Commercetools\Types\UpdateActionCollection;


interface CategoryUpdateActionCollection extends UpdateActionCollection {
    /**
     * @param $index
     * @return CategoryUpdateAction
     */
    public function at($index);

    /**
     * @return CategoryUpdateAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CategoryUpdateAction
     */
    public function map($data, $index);
}
