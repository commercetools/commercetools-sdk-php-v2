<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Extension;

use Commercetools\Types\PagedQueryResponseCollection;


interface ExtensionPagedQueryResponseCollection extends PagedQueryResponseCollection
{
    /**
     * @param $index
     * @return ExtensionPagedQueryResponse
     */
    public function at($index);

    /**
     * @return ExtensionPagedQueryResponse
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ExtensionPagedQueryResponse
     */
    public function map($data, $index);
}
