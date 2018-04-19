<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Channel;

use Commercetools\Types\Channel\ChannelUpdateActionCollection;


interface ChannelAddRolesActionCollection extends ChannelUpdateActionCollection
{
    /**
     * @param $index
     * @return ChannelAddRolesAction
     */
    public function at($index);

    /**
     * @return ChannelAddRolesAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ChannelAddRolesAction
     */
    public function map($data, $index);
}
