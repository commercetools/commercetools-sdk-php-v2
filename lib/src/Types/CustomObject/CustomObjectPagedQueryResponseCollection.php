<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CustomObject;

use Commercetools\Types\PagedQueryResponseCollection;


interface CustomObjectPagedQueryResponseCollection extends PagedQueryResponseCollection {
    /**
     * @param $index
     * @return CustomObjectPagedQueryResponse
     */
    public function at($index);

    /**
     * @return CustomObjectPagedQueryResponse
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CustomObjectPagedQueryResponse
     */
    public function map($data, $index);
}
