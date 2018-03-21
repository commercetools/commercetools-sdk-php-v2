<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Base\Collection;

interface AttributeCollection extends Collection {
    /**
     * @param $index
     * @return Attribute
     */
    public function at($index);

    /**
     * @return Attribute
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return Attribute
     */
    public function map($data, $index);
}
