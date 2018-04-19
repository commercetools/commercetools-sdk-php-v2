<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Types\PagedQueryResponseCollection;


interface ProductTypePagedQueryResponseCollection extends PagedQueryResponseCollection
{
    /**
     * @param $index
     * @return ProductTypePagedQueryResponse
     */
    public function at($index);

    /**
     * @return ProductTypePagedQueryResponse
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductTypePagedQueryResponse
     */
    public function map($data, $index);
}
