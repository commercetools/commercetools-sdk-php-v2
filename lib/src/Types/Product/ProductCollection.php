<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Common\ResourceCollection;


interface ProductCollection extends ResourceCollection {
    /**
     * @param $index
     * @return Product
     */
    public function at($index);

    /**
     * @return Product
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return Product
     */
    public function map($data, $index);

    /**
     * @param string $id
     * @return Product
     */
    public function byId($id);
}
