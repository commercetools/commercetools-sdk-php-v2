<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Review;

use Commercetools\Types\PagedQueryResponseCollection;


interface ReviewPagedQueryResponseCollection extends PagedQueryResponseCollection {
    /**
     * @param $index
     * @return ReviewPagedQueryResponse
     */
    public function at($index);

    /**
     * @return ReviewPagedQueryResponse
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ReviewPagedQueryResponse
     */
    public function map($data, $index);
}
