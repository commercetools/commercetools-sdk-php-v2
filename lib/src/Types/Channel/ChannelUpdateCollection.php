<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Channel;

use Commercetools\Types\UpdateCollection;


interface ChannelUpdateCollection extends UpdateCollection {
    /**
     * @param $index
     * @return ChannelUpdate
     */
    public function at($index);

    /**
     * @return ChannelUpdate
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ChannelUpdate
     */
    public function map($data, $index);
}
