<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Channel;

use Commercetools\Types\PagedQueryResponseCollection;


interface ChannelPagedQueryResponseCollection extends PagedQueryResponseCollection
{
    /**
     * @param $index
     * @return ChannelPagedQueryResponse
     */
    public function at($index);

    /**
     * @return ChannelPagedQueryResponse
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ChannelPagedQueryResponse
     */
    public function map($data, $index);
}
