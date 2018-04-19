<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CustomerGroup;

use Commercetools\Types\PagedQueryResponseCollection;


interface CustomerGroupPagedQueryResponseCollection extends PagedQueryResponseCollection
{
    /**
     * @param $index
     * @return CustomerGroupPagedQueryResponse
     */
    public function at($index);

    /**
     * @return CustomerGroupPagedQueryResponse
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CustomerGroupPagedQueryResponse
     */
    public function map($data, $index);
}
