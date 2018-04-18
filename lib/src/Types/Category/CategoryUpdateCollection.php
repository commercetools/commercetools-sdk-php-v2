<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Category;

use Commercetools\Types\UpdateCollection;


interface CategoryUpdateCollection extends UpdateCollection {
    /**
     * @param $index
     * @return CategoryUpdate
     */
    public function at($index);

    /**
     * @return CategoryUpdate
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CategoryUpdate
     */
    public function map($data, $index);
}
