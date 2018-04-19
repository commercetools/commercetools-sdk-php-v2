<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Channel;

use Commercetools\Types\Channel\ChannelUpdateActionCollection;


interface ChannelSetCustomTypeActionCollection extends ChannelUpdateActionCollection
{
    /**
     * @param $index
     * @return ChannelSetCustomTypeAction
     */
    public function at($index);

    /**
     * @return ChannelSetCustomTypeAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ChannelSetCustomTypeAction
     */
    public function map($data, $index);
}
