<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Common\ResourceCollection;


interface ProductProjectionCollection extends ResourceCollection
{
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
     * @param string $id
     * @return ProductProjection
     */
    public function byId($id);

}
