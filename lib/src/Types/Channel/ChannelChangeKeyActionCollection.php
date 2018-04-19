<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Channel;

use Commercetools\Types\Channel\ChannelUpdateActionCollection;


interface ChannelChangeKeyActionCollection extends ChannelUpdateActionCollection
{
    /**
     * @param $index
     * @return ChannelChangeKeyAction
     */
    public function at($index);

    /**
     * @return ChannelChangeKeyAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ChannelChangeKeyAction
     */
    public function map($data, $index);
}
