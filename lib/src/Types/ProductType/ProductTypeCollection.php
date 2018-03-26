<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Base\Collection;

interface ProductTypeCollection extends Collection {
    /**
     * @param $index
     * @return ProductType
     */
    public function at($index);

    /**
     * @return ProductType
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductType
     */
    public function map($data, $index);

    /**
     * @param string $id
     * @return ProductType
     */
    public function byId($id);
}
