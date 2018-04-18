<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Category;

use Commercetools\Types\Common\ResourceCollection;


interface CategoryCollection extends ResourceCollection {
    /**
     * @param $index
     * @return Category
     */
    public function at($index);

    /**
     * @return Category
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return Category
     */
    public function map($data, $index);

    /**
     * @param string $id
     * @return Category
     */
    public function byId($id);
}
