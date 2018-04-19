<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\State;

use Commercetools\Types\PagedQueryResponseCollection;


interface StatePagedQueryResponseCollection extends PagedQueryResponseCollection
{
    /**
     * @param $index
     * @return StatePagedQueryResponse
     */
    public function at($index);

    /**
     * @return StatePagedQueryResponse
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return StatePagedQueryResponse
     */
    public function map($data, $index);
}
