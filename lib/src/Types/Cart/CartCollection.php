<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Base\Collection;

interface CartCollection extends Collection {
    /**
     * @param $index
     * @return Cart
     */
    public function at($index);

    /**
     * @return Cart
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return Cart
     */
    public function map($data, $index);

    /**
     * @param $id
     * @return string
     */
    public function byId($id);
}
