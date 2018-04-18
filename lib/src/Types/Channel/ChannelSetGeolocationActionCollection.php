<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Channel;

use Commercetools\Types\Channel\ChannelUpdateActionCollection;


interface ChannelSetGeolocationActionCollection extends ChannelUpdateActionCollection {
    /**
     * @param $index
     * @return ChannelSetGeolocationAction
     */
    public function at($index);

    /**
     * @return ChannelSetGeolocationAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ChannelSetGeolocationAction
     */
    public function map($data, $index);
}
