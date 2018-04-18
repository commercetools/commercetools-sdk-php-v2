<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Zone;

use Commercetools\Types\PagedQueryResponseCollection;


interface ZonePagedQueryResponseCollection extends PagedQueryResponseCollection {
    /**
     * @param $index
     * @return ZonePagedQueryResponse
     */
    public function at($index);

    /**
     * @return ZonePagedQueryResponse
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ZonePagedQueryResponse
     */
    public function map($data, $index);
}
