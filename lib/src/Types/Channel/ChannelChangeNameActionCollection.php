<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Channel;

use Commercetools\Types\Channel\ChannelUpdateActionCollection;


interface ChannelChangeNameActionCollection extends ChannelUpdateActionCollection {
    /**
     * @param $index
     * @return ChannelChangeNameAction
     */
    public function at($index);

    /**
     * @return ChannelChangeNameAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ChannelChangeNameAction
     */
    public function map($data, $index);
}
