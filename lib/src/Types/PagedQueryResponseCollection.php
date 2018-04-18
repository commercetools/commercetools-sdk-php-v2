<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types;

use Commercetools\Base\Collection;

interface PagedQueryResponseCollection extends Collection {
    /**
     * @param $index
     * @return PagedQueryResponse
     */
    public function at($index);

    /**
     * @return PagedQueryResponse
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return PagedQueryResponse
     */
    public function map($data, $index);
}
