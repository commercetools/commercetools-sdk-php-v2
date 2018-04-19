<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Types\PagedQueryResponseCollection;


interface CustomerPagedQueryResponseCollection extends PagedQueryResponseCollection
{
    /**
     * @param $index
     * @return CustomerPagedQueryResponse
     */
    public function at($index);

    /**
     * @return CustomerPagedQueryResponse
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CustomerPagedQueryResponse
     */
    public function map($data, $index);
}
