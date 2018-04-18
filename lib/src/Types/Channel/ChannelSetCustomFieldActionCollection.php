<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Channel;

use Commercetools\Types\Channel\ChannelUpdateActionCollection;


interface ChannelSetCustomFieldActionCollection extends ChannelUpdateActionCollection {
    /**
     * @param $index
     * @return ChannelSetCustomFieldAction
     */
    public function at($index);

    /**
     * @return ChannelSetCustomFieldAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ChannelSetCustomFieldAction
     */
    public function map($data, $index);
}
