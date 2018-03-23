<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Base\Collection;

interface ProductProjectionCollection extends Collection {
    /**
     * @param $index
     * @return ProductProjection
     */
    public function at($index);

    /**
     * @return ProductProjection
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductProjection
     */
    public function map($data, $index);

    /**
     * @param $id
     * @return string
     */
    public function byId($id);
}
