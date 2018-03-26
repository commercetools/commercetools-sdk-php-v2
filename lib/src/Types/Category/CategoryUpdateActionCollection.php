<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Category;

use Commercetools\Base\Collection;

interface CategoryUpdateActionCollection extends Collection {
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
