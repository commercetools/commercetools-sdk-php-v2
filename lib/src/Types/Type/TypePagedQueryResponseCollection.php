<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Types\PagedQueryResponseCollection;


interface TypePagedQueryResponseCollection extends PagedQueryResponseCollection
{
    /**
     * @param $index
     * @return TypePagedQueryResponse
     */
    public function at($index);

    /**
     * @return TypePagedQueryResponse
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return TypePagedQueryResponse
     */
    public function map($data, $index);
}
