<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\PagedQueryResponseCollection;


interface OrderPagedQueryResponseCollection extends PagedQueryResponseCollection {
    /**
     * @param $index
     * @return OrderPagedQueryResponse
     */
    public function at($index);

    /**
     * @return OrderPagedQueryResponse
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return OrderPagedQueryResponse
     */
    public function map($data, $index);
}
