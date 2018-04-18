<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\TaxCategory;

use Commercetools\Types\PagedQueryResponseCollection;


interface TaxCategoryPagedQueryResponseCollection extends PagedQueryResponseCollection {
    /**
     * @param $index
     * @return TaxCategoryPagedQueryResponse
     */
    public function at($index);

    /**
     * @return TaxCategoryPagedQueryResponse
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return TaxCategoryPagedQueryResponse
     */
    public function map($data, $index);
}
