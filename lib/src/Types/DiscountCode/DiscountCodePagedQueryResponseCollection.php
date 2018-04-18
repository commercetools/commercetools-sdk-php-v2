<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\DiscountCode;

use Commercetools\Types\PagedQueryResponseCollection;


interface DiscountCodePagedQueryResponseCollection extends PagedQueryResponseCollection {
    /**
     * @param $index
     * @return DiscountCodePagedQueryResponse
     */
    public function at($index);

    /**
     * @return DiscountCodePagedQueryResponse
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return DiscountCodePagedQueryResponse
     */
    public function map($data, $index);
}
