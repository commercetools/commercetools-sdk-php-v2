<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Channel;

use Commercetools\Types\Channel\ChannelUpdateActionCollection;


interface ChannelSetAddressActionCollection extends ChannelUpdateActionCollection
{
    /**
     * @param $index
     * @return ChannelSetAddressAction
     */
    public function at($index);

    /**
     * @return ChannelSetAddressAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ChannelSetAddressAction
     */
    public function map($data, $index);
}
