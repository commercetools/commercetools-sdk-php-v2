<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\PagedQueryResponseCollection;


interface MessagePagedQueryResponseCollection extends PagedQueryResponseCollection
{
    /**
     * @param $index
     * @return MessagePagedQueryResponse
     */
    public function at($index);

    /**
     * @return MessagePagedQueryResponse
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return MessagePagedQueryResponse
     */
    public function map($data, $index);
}
