<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Common\ResourceCollection;


interface CartCollection extends ResourceCollection
{
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
     * @param string $id
     * @return Cart
     */
    public function byId($id);

}
