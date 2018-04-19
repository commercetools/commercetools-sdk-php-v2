<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductDiscount;

use Commercetools\Types\Common\ResourceCollection;


interface ProductDiscountCollection extends ResourceCollection
{
    /**
     * @param $index
     * @return ProductDiscount
     */
    public function at($index);

    /**
     * @return ProductDiscount
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductDiscount
     */
    public function map($data, $index);

    /**
     * @param string $id
     * @return ProductDiscount
     */
    public function byId($id);

}
