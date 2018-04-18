<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Channel;

use Commercetools\Types\Channel\ChannelUpdateActionCollection;


interface ChannelChangeDescriptionActionCollection extends ChannelUpdateActionCollection {
    /**
     * @param $index
     * @return ChannelChangeDescriptionAction
     */
    public function at($index);

    /**
     * @return ChannelChangeDescriptionAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ChannelChangeDescriptionAction
     */
    public function map($data, $index);
}
