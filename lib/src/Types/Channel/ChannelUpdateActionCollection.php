<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Channel;

use Commercetools\Base\Collection;

interface ChannelUpdateActionCollection extends Collection {
    /**
     * @param $index
     * @return ChannelUpdateAction
     */
    public function at($index);

    /**
     * @return ChannelUpdateAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ChannelUpdateAction
     */
    public function map($data, $index);
}
