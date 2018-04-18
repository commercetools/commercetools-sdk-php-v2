<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\PagedQueryResponseCollection;


interface CartPagedQueryResponseCollection extends PagedQueryResponseCollection {
    /**
     * @param $index
     * @return CartPagedQueryResponse
     */
    public function at($index);

    /**
     * @return CartPagedQueryResponse
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CartPagedQueryResponse
     */
    public function map($data, $index);
}
