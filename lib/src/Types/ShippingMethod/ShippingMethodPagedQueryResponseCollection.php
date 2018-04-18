<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShippingMethod;

use Commercetools\Types\PagedQueryResponseCollection;


interface ShippingMethodPagedQueryResponseCollection extends PagedQueryResponseCollection {
    /**
     * @param $index
     * @return ShippingMethodPagedQueryResponse
     */
    public function at($index);

    /**
     * @return ShippingMethodPagedQueryResponse
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ShippingMethodPagedQueryResponse
     */
    public function map($data, $index);
}
