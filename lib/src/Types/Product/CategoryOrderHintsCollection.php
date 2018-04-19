<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Base\Collection;

interface CategoryOrderHintsCollection extends Collection
{
    /**
     * @param $index
     * @return CategoryOrderHints
     */
    public function at($index);

    /**
     * @return CategoryOrderHints
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CategoryOrderHints
     */
    public function map($data, $index);
}
