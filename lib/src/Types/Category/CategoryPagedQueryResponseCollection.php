<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Category;

use Commercetools\Types\PagedQueryResponseCollection;


interface CategoryPagedQueryResponseCollection extends PagedQueryResponseCollection {
    /**
     * @param $index
     * @return CategoryPagedQueryResponse
     */
    public function at($index);

    /**
     * @return CategoryPagedQueryResponse
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CategoryPagedQueryResponse
     */
    public function map($data, $index);
}
