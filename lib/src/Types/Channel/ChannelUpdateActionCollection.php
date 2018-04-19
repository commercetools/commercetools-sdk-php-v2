<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Channel;

use Commercetools\Types\UpdateActionCollection;


interface ChannelUpdateActionCollection extends UpdateActionCollection
{
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
